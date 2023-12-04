
function cartItemIncrement(itemId, number = 1) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        },
        url: 'http://127.0.0.1:8000/api/cart',
        type: 'post',
        data: {
            "action": 'increment',
            "product_id": itemId
        },
        dataType: 'json',
    });
}
function cartItemDecrement(itemId, number = 1) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        },
        url: 'http://127.0.0.1:8000/api/cart',
        type: 'post',
        data: {
            "action": 'decrement',
            "product_id": itemId
        },
        dataType: 'json',
    });
}

function deleteCartItem(id) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        },
        url: `http://127.0.0.1:8000/api/cart/${id}`,
        dataType : 'json',
        type: 'DELETE',
        success: function(data) {
            if (data == 'error') return;
             var json = Object.keys(data).map(function (key) { return data[key]; });
            count = 0;
            json.forEach(()=>count++)
            setTimeout(function () {
                $('#cart > button').html('<div class=\'svg-bg\'><svg><use xlink:href=\'#hcart\'></use></svg><span id=\'cart-total\'> <span class=\'cartt\'>'+count+'</span><span class=\'hidden-xs  hidden-xs  caritem\'> <strong>$0.00</strong> </span></span></div>');
            }, 100);
            if (count <= 0) {
                $('#cart-item').html('<li><p class="text-center">Giỏ hàng trống!</p></li>');
            }
                $('#cart-item').html(json.map((item, index)=> {
                    return `<li class="row d-flex">
                                            <div class="col-md-4">
                                                <img src="/storage/${item.product_image}" alt="" style="width: 100%">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row overflow-hidden">
                                                    <div class="col-md-12">${item.product_name}</div>
                                                    <div class="col-md-12">${new Intl.NumberFormat('vnd', {style: 'currency',currency: 'VND',}).format(item.product_price)}</div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <span class="col-md-2">SL: </span>
                                                            <span class="col-md-8">
                                                            <input id="input-quantity" type="number" name="quantity" value="${item.cart_quantity}" min="1" max="${item.product_quantity}" size="2" id="input-quantity" style="max-width: 80px;max-height: 24px;" class="form-control input-number pull-left" />
                                                            <input type="hidden" name="product_id" value="${item.id}" />
                                                            </span>
                                                            <script id="${item.id}">
                                                                inputNumber${item.id} = document.getElementById('${item.id}').closest('.row').querySelector('input[name="quantity"]')
                                                                oldValue${item.id} = inputNumber${item.id}.value
                                                                productId${item.id} = document.getElementById('${item.id}').closest('.row').querySelector('input[name="product_id"]').value

                                                                inputNumber${item.id}.onchange = function () {
                                                                    if (this.value > oldValue${item.id}) {
                                                                        cartItemIncrement(productId${item.id})
                                                                    } else {
                                                                        cartItemDecrement(productId${item.id})
                                                                    }
                                                                    oldValue${item.id} = this.value
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="http://127.0.0.1:8000/order/${item.id}" class="w-100 btn text-center" style="width: 100%">Mua</a>
                                                <a onclick="deleteCartItem(${item.id})" class="w-100 btn text-center" style="width: 100%">Xoa</a>
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
// var webiOptionAjex = function() {
// 	$.ajax({
// 		url: 'index.php?route=/extension/winter/product_data/option_price',
// 		type: 'post',
// 		data: $(this).closest('.webi-main').find('input[type=\'hidden\'], input[type=\'checkbox\']:checked, input[type=\'radio\']:checked, select'),
// 		success: webiOption,
// 		error: function(xhr, ajaxOptions, thrownError) {
// 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
// 		}
// 	});
// }
// // Custom Function End

$(document).ready(function() {
	// $('.webi-option-click').on('click', webiOptionAjex);
	// $('.webi-option-select').on('change', webiOptionAjex);

	$('.webi-cart').on('click', function() {
        product_body = $(this).parent().parent().parent().parent();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
			url: 'http://127.0.0.1:8000/api/cart',
			type: 'post',
            data: {
                "product_id": product_body.find('input[name=\'product_id\']').val(),
                "quantity": product_body.find('input[name=\'quantity\']').val(),
            },
            dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},

			complete: function() {
				$('#cart > button').button('reset');
			},

			success: function(json) {
                if (json == 'error') return;
                var json = Object.keys(json).map(function (key) { return json[key]; });
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
                    if (count <= 0) {
                        $('#cart-item').html('<li><p class="text-center">Giỏ hàng trống!</p></li>');
                    }
                    $('#cart-item').html(json.map((item, index)=> {
                        return `<li class="row d-flex">
                                            <div class="col-md-4">
                                                <img src="/storage/${item.product_image}" alt="" style="width: 100%">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row overflow-hidden">
                                                    <div class="col-md-12">${item.product_name}</div>
                                                    <div class="col-md-12">${new Intl.NumberFormat('vnd', {style: 'currency',currency: 'VND',}).format(item.product_price)}</div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <span class="col-md-2">SL: </span>
                                                            <span class="col-md-8">
                                                            <input id="input-quantity" type="number" name="quantity" value="${item.cart_quantity}"
                                                            size="2" style="max-width: 80px;max-height: 24px;" class="form-control input-number pull-left" />
                                                            <input type="hidden" name="product_id" value="${item.id}" />
                                                            </span>
                                                            <script id="${item.id}">
                                                                inputNumber${item.id} = document.getElementById('${item.id}').closest('.row').querySelector('input[name="quantity"]')
                                                                oldValue${item.id} = inputNumber${item.id}.value
                                                                productId${item.id} = document.getElementById('${item.id}').closest('.row').querySelector('input[name="product_id"]').value

                                                                inputNumber${item.id}.onchange = function () {
                                                                    if (this.value > oldValue${item.id}) {
                                                                        cartItemIncrement(productId${item.id})
                                                                    } else {
                                                                        cartItemDecrement(productId${item.id})
                                                                    }
                                                                    oldValue${item.id} = this.value
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="http://127.0.0.1:8000/order/${item.id}" class="w-100 btn text-center" style="width: 100%">Mua</a>
                                                <a onclick="deleteCartItem(${item.id})" class="w-100 btn text-center" style="width: 100%">Xoa</a>
                                            </div>
                                        </li>
                                        <hr>`
                    }).join(''))
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	});
});

