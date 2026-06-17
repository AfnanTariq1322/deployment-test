 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel Products</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f8f9fa;
color: #333;
margin: 0;
padding: 40px;
display: flex;
justify-content: center;
}
.container {
background-color: #fff;
max-width: 600px;
width: 100%;
padding: 30px;
border-radius: 10px;
box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}
h1 {
margin-top: 0;
color: #f53003;
text-align: center;
}
.product {
border: 1px solid #eee;
border-radius: 8px;
padding: 15px;
margin-bottom: 15px;
background-color: #fafafa;
}
.product h3 {
margin: 0 0 10px 0;
color: #222;
}
.product p {
margin: 0 0 10px 0;
color: #666;
line-height: 1.5;
}
.price {
font-weight: bold;
color: #28a745;
font-size: 1.1em;
}
.no-data {
text-align: center;
color: #888;
}
</style>
</head>
<body>
<div class="container">
<h1>Our Products</h1>

@if(isset($products) && $products->count() > 0)
@foreach($products as $product)
<div class="product">
<h3>{{ $product->name }}</h3>
<p>{{ $product->description }}</p>
<div class="price">${{ number_format($product->price, 2) }}</div>
</div>
@endforeach
@else
<div class="no-data">
<p>No products found. Please run the migration and seeder.</p>
</div>
@endif
</div>
</body>
</html>

