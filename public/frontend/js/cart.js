$(document).ready(function(){

	count();

	$('.addtocartBtn').on('click',function(){
		alert('hi');
		
		var id=$(this).data('id');
		var name=$(this).data('name');
		var price=$(this).data('price');
		var discount=$(this).data('discount');
		var photo=$(this).data('photo');
		var codeno=$(this).data('codeno');
		var description=$(this).data('description');

		var item={
    				id : id,
    				name : name,
    				price : price,
    				discount : discount,
    				photo : photo,
    				codeno : codeno,
    				description : description,
    				qty : 1
    			};

    	var shop_str=localStorage.getItem('eshop');
		var shop_arr;

		if(shop_str==null){
			shop_arr=Array();
		}else{
			shop_arr=JSON.parse(shop_str);
		}

		var status=false;

		$.each(shop_arr,function(i,v){
			if(id==v.id){
				v.qty++;
				status=true;
			}
		})

		if(status==false){
			shop_arr.push(item);
		}

		var shopData=JSON.stringify(shop_arr);

		localStorage.setItem('eshop',shopData);

		count();

	});

	function count()
	{
		//alert('hello');
		var shop_str=localStorage.getItem('eshop');
		//console.log(shop_str);
		if (shop_str){
			var shop_arr=JSON.parse(shop_str);
			var count=0;
			$.each(shop_arr,function(i,v){
				count+=v.qty;
				if(v.discount){
					var cart_amount=cart_amount+parseInt(v.discount);
				}else{
					var cart_amount=cart_amount+parseInt(v.price);
				}
			});
			$('.count').html(count);
		}else{
			$('.count').html(0);
		}
	};


	function getData(){
		var shop_str=localStorage.getItem('eshop');
		if(shop_str){
			$('.shoppingcart_div').show();
			$('.noneshoppingcart_div').hide();

			var shop_arr=JSON.parse(shop_str);
			if (shop_arr.length>0){
			var html='';
			var total=0;
			$.each(shop_arr,function(i,v){
				if(v.discount){
					var sub_total=v.qty*v.discount;
				}else{
					var sub_total=v.qty*v.price;
				}
				
				if(v.discount){
				var rows=`<tr>
			                <td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
			                <td class="product-des" data-title="Description">
			                  <p class="product-name"><a href="#">${{v.name}}</a></p>
			                  <p class="product-des">${{v.name}}</p>
			                </td>
			                <td class="price" data-title="Price"><span>$110.00 </span></td>
			                <td class="qty" data-title="Qty"><!-- Input Order -->
			                  <div class="input-group">
			                    <div class="button minus">
			                      <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
			                        <i class="ti-minus"></i>
			                      </button>
			                    </div>
			                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="1">
			                    <div class="button plus">
			                      <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
			                        <i class="ti-plus"></i>
			                      </button>
			                    </div>
			                  </div>
			                  <!--/ End Input Order -->
			                </td>
			                <td class="total-amount" data-title="Total"><span>$220.88</span></td>
			                <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
			              </tr>`;
				}else{
					var rows=`<tr>
			                <td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
			                <td class="product-des" data-title="Description">
			                  <p class="product-name"><a href="#">Women Dress</a></p>
			                  <p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
			                </td>
			                <td class="price" data-title="Price"><span>$110.00 </span></td>
			                <td class="qty" data-title="Qty"><!-- Input Order -->
			                  <div class="input-group">
			                    <div class="button minus">
			                      <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
			                        <i class="ti-minus"></i>
			                      </button>
			                    </div>
			                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="1">
			                    <div class="button plus">
			                      <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
			                        <i class="ti-plus"></i>
			                      </button>
			                    </div>
			                  </div>
			                  <!--/ End Input Order -->
			                </td>
			                <td class="total-amount" data-title="Total"><span>$220.88</span></td>
			                <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
			              </tr>`;
				}
				html+=rows;
				total+=sub_total;
			})

			$('#shoppingcart_table').html(html);
			$('#cart_total').html('Total : '+ total +' Ks');
			$('.cart_amount').html(total+' Ks');
		}else{
			$('.shoppingcart_div').hide();
			$('.noneshoppingcart_div').show();
		}
		}else{
			$('.shoppingcart_div').hide();
			$('.noneshoppingcart_div').show();
		}
	};

});