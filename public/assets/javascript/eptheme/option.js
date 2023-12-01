function deleteCartItem(index) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        },
        url: `http://127.0.0.1:8000/api/cart/${index}`,
        dataType : 'json',
        type: 'DELETE',
        success: function(data) {
             var json = Object.keys(data).map(function (key) { return data[key]; });
            count = 0;
            json.forEach(()=>count++)
                // Need to set timeout otherwise it wont update the total
                setTimeout(function () {
                    $('#cart > button').html('<div class=\'svg-bg\'><svg><use xlink:href=\'#hcart\'></use></svg><span id=\'cart-total\'> <span class=\'cartt\'>'+count+'</span><span class=\'hidden-xs  hidden-xs  caritem\'> <strong>$0.00</strong> </span></span></div>');
                }, 100);

                $('#cart-item').html(json.map((item, index)=> {
                    return `<li class="row d-flex">
                                            <div class="col-md-4">
                                                <img src="/storage/${item.product_image}" alt="" style="width: 100%">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row overflow-hidden">
                                                    <div class="col-md-12">${item.product_name}</div>
                                                    <div class="col-md-12">${new Intl.NumberFormat('vnd', {style: 'currency',currency: 'VND',}).format(item.product_price)}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="http://127.0.0.1:8000/order/${item.id}" class="w-100 btn btn-success text-center" style="width: 100%">Mua</a>
                                                <button onclick="deleteCartItem(${index})" class="w-100 btn  text-center" style="width: 100%">Xoa</button>
                                            </div>
                                        </li>
                                        <hr>`
                }).join(''))

        },
        error: (error) => {
            console.log(error);
        }
    });
}


// Winter Infotech
// Custom Function


var webiOption = function(json) {
	var product_id = json['product_id'];
	if(json['price']) {
		$('[data-update=price-'+ product_id +']').text(json['price']);
	}
	if(json['special']) {
		$('[data-update=price-new-'+ product_id +']').text(json['special']);
	}
	if(json['without_tax']) {
		$('[data-update=price-tax-'+ product_id +']').text(json['without_tax']);
	}
	if(json['discount']) {
		$('[data-update=discount-'+ product_id +']').text(json['discount']);
	}
}
var webiOptionAjex = function() {
	$.ajax({
		url: 'index.php?route=/extension/winter/product_data/option_price',
		type: 'post',
		data: $(this).closest('.webi-main').find('input[type=\'hidden\'], input[type=\'checkbox\']:checked, input[type=\'radio\']:checked, select'),
		success: webiOption,
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
}
// Custom Function End

$(document).ready(function() {
	$('.webi-option-click').on('click', webiOptionAjex);
	$('.webi-option-select').on('change', webiOptionAjex);

	$('.webi-cart').on('click', function() {
		$.ajax({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val(),
            },
			url: 'http://127.0.0.1:8000/api/cart',
			type: 'post',
            data: $(this).parent().parent().parent().parent().find('input[type=\'text\'], input[type=\'hidden\'], input[type=\'radio\']:checked, input[type=\'checkbox\']:checked, select, input[name=\'_token\']'),
            dataType: 'json',

			beforeSend: function() {
				$('#cart > button').button('loading');
			},

			complete: function() {
				$('#cart > button').button('reset');
			},

			success: function(json) {
                count = 0;
                json.forEach(()=>count++)
                json['success'] = 'Sản phẩm đã được thêm vào giỏ hàng';

				$('.alert-dismissible, .text-danger').remove();
				if (json['error']) {
					if (json['error']['option']) {
						for (i in json['error']['option']) {
							var element = $('#input-option' + i.replace('_', '-'));

							if (element.parent().hasClass('input-group')) {
								element.parent().parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
							} else {
								element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
							}
						}
					}
					if (json['error']['recurring']) {
						$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
					}
					// Highlight any found errors
					$('.text-danger').parent().addClass('has-error');
				}
				if (json['success']) {
					$('#content').parent().before('<div class="a-one"><div class="alert alert-success alert-dismissible alertsuc"><svg width="20px" height="20px"> <use xlink:href="#successi"></use></svg> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div></div>');

					// Need to set timeout otherwise it wont update the total
					setTimeout(function () {
						$('#cart > button').html('<div class=\'svg-bg\'><svg><use xlink:href=\'#hcart\'></use></svg><span id=\'cart-total\'> <span class=\'cartt\'>'+count+'</span><span class=\'hidden-xs  hidden-xs  caritem\'> <strong>$0.00</strong> </span></span></div>');
					}, 100);

                    $('#cart-item').html(json.map((item, index)=> {
                        return `<li class="row d-flex">
                                            <div class="col-md-4">
                                                <img src="/storage/${item.product_image}" alt="" style="width: 100%">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row overflow-hidden">
                                                    <div class="col-md-12">${item.product_name}</div>
                                                    <div class="col-md-12">${new Intl.NumberFormat('vnd', {style: 'currency',currency: 'VND',}).format(item.product_price)}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="http://127.0.0.1:8000/order/${item.id}" class="w-100 btn btn-success text-center" style="width: 100%">Mua</a>
                                                <button onclick="deleteCartItem(${index})" class="w-100 btn  text-center" style="width: 100%">Xoa</button>
                                            </div>
                                        </li>
                                        <hr>`
                    }).join(''))
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	});
});

