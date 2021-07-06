        // =============================================
        // API-ALL-PRODUCT 
        // =============================================
        var productAPI = 'http://localhost:8080/NoiThat/sanpham'
        function start() {
            getProducts(renderProducts)
        }
        start()

        function format(n) {
            return n.toLocaleString('vi', {
                style: 'currency',
                currency: 'VND'
            })
        }
        
        function getProducts(callback) {
            fetch(productAPI)
                .then((response) => {
                    return response.json()
                })
                .then(callback)
        }

        function renderProducts(products) {
            var listProductsBlock = document.querySelector('#list-product')
            console.log(listProductsBlock)
            var htmls = products.map(function(product) {
                return `
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="evo-product-block-item">
                            <div class="product-img">
                                <a href= "http://localhost:8080/NoiThat/sanpham/detail/${product.productid}">
                                    <img class="img-prd" src="mvc/Assets/img/All-products/${product.img}.jpg" alt="">
                                </a>
                            </div>
                            <div class="button-add">
                                <button>
                                    <i class="far fa-check-square"></i>
                                </button>
                                <button class="btn-cart" type="submit"
                                    data-bs-toggle="modal" data-bs-target="#cartModal"
                                    onClick="cartLS.add({id: ${product.productid}, name: '${product.name}', img:'${product.img}', price: ${product.price}})">
                                        <i class="fas fa-shopping-bag"></i>
                                </button>
                            </div>
                            <div class="product-detail">
                                <div class="pro-brand">
                                    <a href="">Evo Nội Thất</a>
                                </div>
                                <h3>
                                    <a href="http://localhost:8080/NoiThat/sanpham/detail/${product.productid}" class="pro-name">${product.name}</a>
                                </h3>
                                <p class="pro-price"> ${format(product.price)}</p>
                            </div>
                        </div>
                    </div>`
            })
            listProductsBlock.innerHTML = htmls.join('')
        }
        