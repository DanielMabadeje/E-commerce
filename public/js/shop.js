$.ajax(settings).done(function (response) {
    // response=JSON.stringify(response)
    var x=response.success.message
    // alert(x)
    // console.log(x)
    let articlesresult='';
    x.forEach((entry) => {
        // console.log(entry)
articlesresult +=
`
<div class="col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="${entry.category_name}" style="  ">                 <!-- Product-->
<article class="product wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
    <div class="product-body">
        <div class="product-figure"><img src="http://localhost/reagan/${entry.file[0]}" alt="" width="220" height="160">
        </div>
        <h5 class="product-title"><a href="http://localhost/reagan/pages/viewproduct/1">${entry.name}</a></h5>
        <div class="product-price-wrap">
            <div class="product-price product-price-old">$${entry.price}.00</div>
            <div class="product-price">$${entry.price}.00</div>
        </div>
    </div><span class="product-badge product-badge-sale">${entry.status}</span>
    <div class="product-button-wrap">
        <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="http://localhost/reagan/pages/viewproduct/${entry.id}"></a></div>
        <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="javascript:void(0)" onclick="addtocart(${entry.id})"></a></div>
    </div>
</article>
</div>`;
}); 
    //     <li> content: ${entry.content} </li>
document.getElementById('product_grid').innerHTML = articlesresult;
});