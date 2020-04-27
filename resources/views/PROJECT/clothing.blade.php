<html>
    <head>
    <title>#shoppin - Products</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Quicksand');
        .breadcrumb{
          background-color:	#556B2F;
          margin-left:700px;
        }
        .breadcrumb > li + li:before{
                padding: 0 5px;
                content:"|";
        }
      .fixed-bg {
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100%; 
            width: 100%;
            color: white;
            text-align: center;
            display: table;
        }
      </style>
      </head>
    <body>
      <div class="container-fluid">
          <div class="row"> 
              <div class="col-lg-12" style="padding-right:100px;background-color:	#556B2F;">
                <table width="100%" cellspacing="0">
  	            <tr>
                  <td><h1 class="fixed-bg">#Fashion </h1> </td>
                <td>
                    <ol class = "col-lg-12 breadcrumb">
            <li><a href="{{url('/project') }}">Home</a></li>
            <li><a href="#">About</a></li>
            <li class="active">Products</li>
            <li><a href="{{url('/contact') }}">Contact</a></li>
        </ol> 
</td>
</tr>
</div>
    </table>
    </div>
<div class="single-product-area">
       
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-9">
                    <div class="single-shop-product">
                        <div class="product-upper">
                        <img src="{{ url('/pr_img/montreal.jpeg') }}" alt="Montreal Striped T-Shirt">
                            
                        </div>
                        <h2><a href="productpage_2.php?pname=Montreal Striped T-Shirt&pprice=650">Montreal Striped T-Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.650</ins>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=Montreal Striped T-Shirt&pprice=650">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/bigs201-black-grey-bigidea-m.jpeg') }}" alt="">
                        </div>
                        <h2><a href="productpage_2.php?pname=Bigidea Solid Hooded T-Shirt&pprice=399">Bigidea Solid Hooded T-Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.399</ins>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=Bigidea Solid Hooded T-Shirt&pprice=399">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/blackmelangeblack-sayitloud-m.jpeg') }}" alt="SayItLoud Solid Black T-Shirt">
                        </div>
                        <h2><a href="productpage_2.php?pname=SayItLoud Solid Black T-Shirt&pprice=499">SayItLoud Solid Black T-Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.499</ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=SayItLoud Solid Black T-Shirt&pprice=499">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/montrealxl.jpeg') }}" alt="montrealxl">
                            
                        </div>
                        <h2><a href="productpage_2.php?pname=Montreal Multicolor T-Shirt&pprice=711">Montreal Multicolor T-Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.711</ins> 
                        </div>  
                        
                        
                            
                
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=Montreal Multicolor T-Shirt&pprice=711">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/rodid-s.jpeg') }}" alt="Rodid Casual Blue Shirt">
                        </div>
                        <h2><a href="productpage_2.php?pname=Rodid Casual Blue Shirt&pprice=549">Rodid Casual Blue Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.549</ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=Rodid Casual Blue Shirt&pprice=549">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/leemenshirt.jpg') }}" alt="leemenshirt">
                        </div>
                        <h2><a href="productpage_2.php?pname=Lee Shirt for Men&pprice=1135">Lee Shirt for Men</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.1135</ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=Lee Shirt for Men&pprice=1135">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/united-colors-of-benetton-m.jpeg') }}" alt="UCB Casual Shirt">
                        </div>
                        <h2><a href="productpage_2.php?pname=UCB Casual Shirt&pprice=1374">UCB Casual Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.1374</ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=UCB Casual Shirt&pprice=1374">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/peterenglandshirt.jpeg') }}" alt="Peter England Formal Shirt">
                        </div>
                        <h2><a href="productpage_2.php?pname=Peter England Formal Shirt&pprice=931">Peter England Formal Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.931</ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=Peter England Formal Shirt&pprice=931">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/hlsh008605-black-highlander.jpeg') }}" alt="HIGHLANDER Casual Black Shirt">
                        </div>
                        <h2><a href="productpage_2.php?pname=HIGHLANDER Casual Black Shirt&pprice=501">HIGHLANDER Casual Black Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.501</ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=HIGHLANDER Casual Black Shirt&pprice=501">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/lash000021-logo-apparels-s.jpeg') }}" alt="Logo Apparels Casual Shirt">
                        </div>
                        <h2><a href="productpage_2.php?pname=Logo Apparels Casual Shirt&pprice=699">Logo Apparels Casual Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.699</ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=Logo Apparels Casual Shirt&pprice=699">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/montreal-m.jpeg') }}" alt="montreal-m">
                        </div>
                        <h2><a href="productpage_2.php?pname=Montreal Multicolor T-Shirt&pprice=899">Montreal T-Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.899.00</ins> <del>Rs.999.00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=Montreal Multicolor T-Shirt&pprice=899">Add to cart</a>
                        </div>                       
                    </div>
                </div>
               <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ url('/pr_img/peterenglandshirt.jpeg') }}" alt="Peter England Formal Shirt">
                        </div>
                        <h2><a href="productpage_2.php?pname=Peter England Formal Shirt&pprice=931">Peter England Formal Shirt</a></h2>
                        <div class="product-carousel-price">
                            <ins>Rs.931</ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="tocart.php?cpname=Peter England Formal Shirt&pprice=931">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="{{ url('/pr_img/cbrand3.jpg') }}" width="270" height="100"> 
                            <img src="{{ url('/pr_img/cbrand4.jpg') }}" width="270" height="100">
                            <img src="{{ url('/pr_img/cbrand5.jpg') }}" width="270" height="100">
                            <img src="{{ url('/pr_img/cbrand6.jpg') }}" width="270" height="100">                           
                        </div>
                    </div>
            </div>
            
    </body>
</html>