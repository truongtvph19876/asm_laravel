@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ __($module_title) }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.$module_name.index")}}' icon='{{ $module_icon }}'>
        {{ __($module_title) }}
    </x-backend-breadcrumb-item>
    <x-backend-breadcrumb-item type="active">{{ __($module_action) }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<x-backend.layouts.create :module_name="$module_name" :module_path="$module_path" :module_title="$module_title" :module_icon="$module_icon" :module_action="$module_action" />
<div id="variant-container"></div>
@endsection

@push('after-scripts')
    <script>
        function convertToSlug (str, separator = '-') {
            str = str
                .toLowerCase()
                .replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a")
                .replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e")
                .replace(/ì|í|ị|ỉ|ĩ/g, "i")
                .replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o")
                .replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u")
                .replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y")
                .replace(/đ/g, "d")
                .replace(/\s+/g, "-")
                .replace(/[^A-Za-z0-9_-]/g, "")
                .replace(/-+/g, "-");
            if (separator) {
                return str.replace(/-/g, separator);
            }
            return str;
        }
    </script>
    <script>
        let slug = $('#slug');
        let name = $('#name');
        name.on('keyup', function (event){
            slug.val(convertToSlug(event.target.value))
        })
    </script>
@endpush

@push('after-scripts')
    <script>
        let key = 1;
        let attributeData = [];
        function generateOptions() {
            $(document).ready(function (){
                $.ajax({
                    url: 'http://127.0.0.1:8000/admin/attributes/index_data',
                    type: 'GET',
                    dataType: 'json',
                    success: ({ data })=> {
                        const dataSuggest = data.filter((item)=> item.parent_id == -1);
                        addInputAttribute(dataSuggest);
                        attributeData = data;
                        key++;
                    },
                    error: ()=> {
                        return [];
                    }
                })
            })
        }

        function generateAttribute()  {
            const variantContainer = document.querySelector("#variant-container");
            const attributes = $('.attribute-value-row').toArray();
            const attributeOptions = document.querySelectorAll('.attribute-option');
            const attributeFirst = [];
            const attributeEnd = [];
            let variantHtmlOptions = '';

            variantHtmlOptions = '';

            attributeOptions.forEach((option, i)=> {
                console.log(i)
            })

        }

        function addInputAttribute(data) {
            $('#attribute-container').append(
                `<div class="row" id="attribute-row-${key}" xmlns="http://www.w3.org/1999/html">
                <div class="col-2 attribute-item mb-3">
                   <div class="form-group">
                        <label class="mb-2">Attribute</label>
                        <select name="attribute" class="form-select attribute-item" onchange="getAttributeValue(this)">
                            <option class="search-option p-3 my-1 border rounded" value="0">-- Select --</option>
                            ${data?.map((item) => `<option class="search-option p-3 my-1 border rounded" value="${item.id}">${item.name}</option>`).join('')}
                        </select>

                   </div>
                </div>
                <div class="col-4 attribute-item mb-3">
                   <div class="form-group">
                        <label class="mb-2">Attribute Value</label>
                        <div class="attribute-value row d-flex attribute-value-row"></div>
                   </div>
                </div>
                <div class="col-2 attribute-item mb-3">
                   <div class="form-group">
                        <label class="mb-2">Action</label>
                        <div class="col-2"><button type="button" class="btn btn-danger" onclick="$($('#attribute-row-${key}').remove())">REMOVE</button></div>
                   </div>
                </div>
                </div>`)
        }

        function removeInputAttribute() {
            $('.attribute-item').remove();
        }

        function getAttributeValue(element){
            const rowAttribute = element.parentElement.parentElement.parentElement;
            const attributeContainer = rowAttribute.querySelector(".attribute-value");
            const parentAttributeId = element.value;
            if (parentAttributeId !=0) {
                const optionValues = attributeData.filter((item) => item.parent_id == parentAttributeId);

                let optionhtml = optionValues.map((item, index)=> {
                    return `<div class="col-4 d-flex justify-content-between px-0 mx-1 bg-light attribute-option-${index}">
                    <span class="btn btn-light attribute-name" style="color: ${item.value}">${item.name}</span>
                    <input type="hidden" class="attribute-value" value="${item.value}" disabled/>
                    <span class="btn btn-danger text-white" onclick="$(this.parentElement).remove()">X</span>
                    </div>`
                }).join('')
                attributeContainer.innerHTML = optionhtml
            }
        }
        $(document).ready(function() {
            const product_variant_options = $('#product_type');
            const container = $('#product-option-container');

            product_variant_options.change(function (event){
                if (event.target.value == 1) {
                    container.append(`<div class="row">
                        <div class="col-6" id="add-attribute-btn">
                            <div class="form-group" onclick="generateOptions()">
                                  <label class="mb-2">Attribute Add</label>
                                 <input class="form-control btn btn-outline-success" placeholder="Attribute Add"/>
                            </div>
                            </div>
                        <div class="col-6" id="generate-attribute-btn">
                        <div class="form-group" onclick="generateAttribute()">
                                <label class="mb-2">Generate</label>
                                <input class="form-control btn btn-outline-primary" placeholder="Generate"/>
                            </div>
                        </div>
                        </div>`);
                } else {
                    $('#add-attribute-btn').remove();
                    $('#generate-attribute-btn').remove();
                    removeInputAttribute()
                }
            })
        });

    </script>
@endpush
