<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/1b2f4972b7.js" crossorigin="anonymous"></script>
    <script src="js/script2.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

    <header>
        <div id="menu-bar" class="fa fa-bars"></div>
        <a href="#" class="logo"><i class="fa-solid fa-bowl-food">&nbsp; BIRYANI EXPRESS</i></a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#product">Biryani</a>
            <a href="#sale">Starter</a>
            <a href="#combos">Combos</a>
            <a href="#dessert">Desserts</a>
            <a href="#news">Updates & Offers</a>
        </nav>
        <div class="icons">
            <a href="#"><i class="fa fa-heart"></i></a>
            <a href="#" class="cart-icon">
                <i class="fa fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </a>
            <div class="cart-preview">
                <ul class="cart-items">
                    <!-- Cart items will be here -->
                </ul>
                <p class="total">Total: ₹ 0.00</p>
                <button class="checkout">Checkout</button>
            </div>
            <?php
            session_start();
            if (isset($_SESSION['name'])) {
                echo '<div class="dropdown">
            <button class="dropbtn">Welcome, ' . $_SESSION['name'] . ' ▼</button>
            <div class="dropdown-content">
                <a href="account.php">My Account</a>
                <a href="orders.php">My Orders</a>
                <a href="logout.php">Logout </a>
               
            </div>
          </div>';
            } else {
                echo '<div class="login">
                <a href="login.html"><i class="fa fa-user"></i></a>
          </div>';
            }
            ?>
        </div>
    </header>




    <section class="home" id="home">
        <div class="slide-container active">
            <div class="slide">
                <div class="content">
                    <span>The </span>
                    <h3>BIRYANI EXPRESS</h3>
                    <br>
                    <p>
                        Order the delicious Biryani from Behrouz Express | The Biryani that's safe & hygienic. Avail
                        free home delivery on all orders.
                    </p>


                </div>
                <div class="image">
                    <img src="img/slide/4.png" class="shoe">
                </div>
            </div>
        </div>

    </section>

    <section class="product" id="product">
        <h1 class="heading">LAZEEZ <span>BIRYANI</span></h1>
        <div class="box-container">
            <div class="box">

                <div class="content">
                    <img src="img/product4/1.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>SUBZ E BIRYANI</h3>
                    <div class="price">₹299</div>
                    <a href="#" class="btn">add to cart</a>

                </div>

            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/2.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>ZAITOONI PANEER BIRYANI</h3>
                    <div class="price">₹349</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/3.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>HYDERABADI PANEER BIRYANI</h3>
                    <div class="price">₹429</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/4.png" alt="">
                    <h3> <i class="fa-solid fa-carrot"></i>ZAIEKEDAR PANEER BIRYANI</h3>
                    <div class="price">₹499</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/5.png" alt="">
                    <h3><i class="fa-sharp fa-solid fa-drumstick-bite"></i>MURGH TIKKA BIRYANI</h3>
                    <div class="price">₹369</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">

                <div class="content">
                    <img src="img/product4/6.png" alt="">
                    <h3><i class="fa-sharp fa-solid fa-drumstick-bite"></i>CHICKEN TIKKA BIRYANI</h3>
                    <div class="price">₹499</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/7.png" alt="">
                    <h3><i class="fa-sharp fa-solid fa-drumstick-bite"></i>MURGH AFGHANI BIRYANI</h3>
                    <div class="price">₹559</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/8.png" alt="">
                    <h3><i class="fa-sharp fa-solid fa-drumstick-bite"></i>MUTTON TIKKA BIRYANI</h3>
                    <div class="price">₹699</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <section class="product" id="combos">
        <h1 class="heading">SUPER <span>COMBOS</span></h1>
        <div class="box-container">
            <div class="box">

                <div class="content">
                    <img src="img/product4/9.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>Grand Celebration Combo [Zaikedaar Paneer Biryani + 2
                        types of Kebab]</h3>
                    <div class="price">₹1349</div>
                    <a href="#" class="btn">add to cart</a>

                </div>

            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/10.png" alt="">
                    <h3><i class="fa-sharp fa-solid fa-drumstick-bite"></i>Solo Celebration Combo [Murgh Afgani Biryani
                        +
                        Murgh Kefta
                        Kebabs]</h3>
                    <div class="price">₹699</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/11.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>Solo Celebration Combo with Paneer Subz Biryani + Beetroot
                        Kebabs</h3>
                    <div class="price">₹599</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/12.png" alt="">
                    <h3><i class="fa-sharp fa-solid fa-drumstick-bite"></i>ZAIEKEDAR PANEER BIRYANI</h3>
                    <div class="price">₹499</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
    </section>







    <section class="product" id="sale">
        <h1 class="heading">KEBABS <span>&nbsp; & STARTERS!</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="content">
                    <img src="img/product5/1.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>FALAFEL-E-KHAS</h3>
                    <div class="price">₹199</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

            </div>
            <div class="box">
                <div class="content">
                    <img src="img/product5/2.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>FALAFAL-E-KHAS WITH THUMS UP</h3>
                    <div class="price">₹249</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <img src="img/product5/3.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>BEETROOT & PEANUT KEBAB [6 PC]</h3>
                    <div class="price">₹259</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <img src="img/product5/4.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>DAHI KEBAB [6 PC]</h3>
                    <div class="price">₹259</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <img src="img/product5/5.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>HARA BHARA KEBAB [6 PC]</h3>
                    <div class="price">₹289</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

            </div>
            <div class="box">
                <div class="content">
                    <img src="img/product5/6.png" alt="">
                    <h3><i class="fa-sharp fa-solid fa-drumstick-bite"></i>MURGH MALAI KEBAB [6 PC]</h3>
                    <div class="price">₹419</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <img src="img/product5/7.png" alt="">
                    <h3><i class="fa-sharp fa-solid fa-drumstick-bite"></i>MURGH MEFTA MEATBALL [4 PC]</h3>
                    <div class="price">₹199</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <img src="img/product5/7.png" alt="">
                    <h3><i class="fa-sharp fa-solid fa-drumstick-bite"></i>MURGH MEFTA MEATBALL [4 PC] WITH THUMS UP
                    </h3>
                    <div class="price">₹249</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>


        </div>


    </section>

    <section class="product" id="dessert">
        <h1 class="heading">Desserts <span>& Extras</span></h1>
        <div class="box-container">
            <div class="box">

                <div class="content">
                    <img src="img/product4/13.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>GULAB JAMUN [2 PC]</h3>
                    <div class="price">₹69</div>
                    <a href="#" class="btn">add to cart</a>

                </div>

            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/14.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>GULAB JAMUN [10 PC]</h3>
                    <div class="price">₹449</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/15.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>MINT RAITA</h3>
                    <div class="price">₹49</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">

                <div class="content">
                    <img src="img/product4/16.png" alt="">
                    <h3><i class="fa-solid fa-carrot"></i>MAKHANI GRAVY</h3>
                    <div class="price">₹49</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
    </section>



    <footer class="footer-distributed">

        <div class="footer-left">

            <i class="fa-solid fa-bowl-food">&nbsp; BIRYANI EXPRESS</i>

            <p class="footer-links">
                <a href="#home" class="link-1">Home</a>
                <a href="#product">Products</a>
                <a href="#featured">New</a>
                <a href="#sale">Starters</a>
                <a href="#news">Updates & Offer</a>
                <a href="#blog">Reviews</a>
            </p>

            <p class="footer-company-name">BIRYANI EXPRESS © 2023</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>JAIPUR,</span> RAJASTHAN</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 14115185 </p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:care@biryaniexpress.com">care@biryaniexpress.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                A place for Royal Biryani.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>

            </div>

        </div>

    </footer>

    <script>
        const cartBtns = document.querySelectorAll('.btn');
        let cartItems = [];

        cartBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const product = btn.parentElement;
                const imgSrc = product.querySelector('img').getAttribute('src');
                const title = product.querySelector('h3').textContent;
                const price = product.querySelector('.price').textContent;
                const cartItem = {
                    img: imgSrc,
                    title: title,
                    price: price
                };
                cartItems.push(cartItem);
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                updateCart();
            });
        });

        function updateCart() {
            const cartCount = document.querySelector('.cart-count');
            const cartPreview = document.querySelector('.cart-preview');
            const cartItemsList = document.querySelector('.cart-items');
            let total = 0;
            cartItemsList.innerHTML = '';
            cartItems.forEach(item => {
                const li = document.createElement('li');
                li.innerHTML = `
                <img src="${item.img}" alt="">
                <div>
                    <h4>${item.title}</h4>
                    <p>${item.price}</p>
                </div>
                <i class="fa fa-times-circle remove"></i>
            `;
                cartItemsList.appendChild(li);
                total += parseInt(item.price.slice(1));
            });
            cartCount.textContent = cartItems.length;
            document.querySelector('.total').textContent = `Total: ₹${total}.00`;
            cartPreview.classList.add('show');
            const removeBtns = document.querySelectorAll('.remove');
            removeBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const li = btn.parentElement;
                    const title = li.querySelector('h4').textContent;
                    cartItems = cartItems.filter(item => item.title !== title);
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));
                    updateCart();
                });
            });
        }

        window.onload = () => {
            if (localStorage.getItem('cartItems')) {
                cartItems = JSON.parse(localStorage.getItem('cartItems'));
                updateCart();
            }
        };

        // Add the new products to the cart
        const newProducts = [
            {
                img: "https://via.placeholder.com/150",
                title: "New Product 1",
                price: "₹50.00"
            },
            {
                img: "https://via.placeholder.com/150",
                title: "New Product 2",
                price: "₹75.00"
            },
            {
                img: "https://via.placeholder.com/150",
                title: "New Product 3",
                price: "₹100.00"
            }
        ];

        const addToCartBtns = document.querySelectorAll('.add-to-cart');
        addToCartBtns.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                const newProduct = newProducts[index];
                cartItems.push(newProduct);
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                updateCart();
            });
        });
    </script>

</body>

</html>