<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="store.css">
    <link rel="icon" href="images/Logopng.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Coming+Soon&family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
<body>

  <section class="collection-banner">
      <div class="search-bar-container">
          <input type="text" placeholder="Search for Items..." class="search-bar" id="searchInput" oninput="filterItems()">
          <button class="search-btn" onclick="filterItems()"><i class="fas fa-search"></i></button>
      </div>
      <h1>NEW COLLECTION</h1>
      <p>Fitzone Fitness</p>
  </section>


  <section class="new-in-section">
      <h2>Apparel and Accessories</h2>
      <p class="PP" >Gear up with performance-focused clothing and accessories for every workout. Add premium apparel to your cart for style and comfort!</p>
      <div class="cart-container">
        <button class="carts-btn" onclick="toggleCart()"><img src="images/icons8-cart-30.png">
          <span id="cart-count" class="cart-badge">0</span>
        </button>
      </div>


<!-- Cart -->
<div id="cart-modal" class="modal">
    <div class="modal-header">
          <h2>Your Shopping Cart</h2>
          <span class="closes-btn" onclick="toggleCart()">&times;</span>
    </div>
    <div class="modal-body">
          <div id="cart-items" class="cart-items"></div>
          <div class="cart-total">
          <p>Total: <span id="cart-total-price">Rs:0.00</span></p>
      </div>
      </div>
      <div class="modal-footer">
            <button class="checkout-btn" onclick="checkout()">Proceed to Checkout</button>
      </div>
    </div>
        
        <!--scroll buttom-->
        <div class="scroll-container" id="shoes-scroll">
            <button class="pre-btn" id="preBtn">❮</button>
            <button class="nxt-btn" id="nxtBtn">❯</button>

            <!--cards-->
            <div class="scroll-content">
                  <div class="card">
                    <img src="images/newS1.png" alt="Shoe">
                    <p class="product-name">Nike Shoe</p>
                    <p class="price">RS:15000</p>
                    <button class="add-to-cart-btn" onclick="addToCart('Running Shoes', 15000.00, 'images/newS1.png')"><img src="images/icons8-cart-30.png"></button>
                    <button class="show-more-btn" onclick="showProductDetails(1)">Show More</button>
                  </div>
                
                  <div class="card">
                    <img src="images/newSHOE4.png" alt="Hiking boots">
                    <p class="product-name">Hiking boots</p>
                    <p class="price">Rs:20000</p>
                    <button class="add-to-cart-btn" onclick="addToCart('Hiking Boots', 20000.00, 'images/newSHOE4.png')"><img src="images/icons8-cart-30.png"></button>
                    <button class="show-more-btn" onclick="showProductDetails(2)">Show More</button>
                  </div>
                <div class="card">
                    <img src="images/shoe3.png" alt="Nike Air">
                    <p class="product-name">Nike Air</p>
                    <p class="price">Rs:30000</p>
                    <button class="add-to-cart-btn" onclick="addToCart('Nike Air', 30000.00, 'images/shoe3.png')"><img src="images/icons8-cart-30.png"></button>
                    <button class="show-more-btn" onclick="showProductDetails(3)">Show More</button>
                </div>
                <div class="card">
                    <img src="images/cap1.jpg" alt="Gym Cap">
                    <p class="product-name">Gym Cap</p>
                    <p class="price">Rs:2000</p>
                    <button class="add-to-cart-btn" onclick="addToCart('Gym Cap', 2000.00, 'images/cap1.jpg')"><img src="images/icons8-cart-30.png"></button>
                    <button class="show-more-btn" onclick="showProductDetails(4)">Show More</button>
                </div>
                <div class="card">
                    <img src="images/newcap2.png" alt="Nike Cap">
                    <p class="product-name">Nike Cap</p>
                    <p class="price">Rs:2500</p>
                    <button class="add-to-cart-btn" onclick="addToCart('Nike Cap', 2500.00, 'images/newcap2.png')"><img src="images/icons8-cart-30.png"></button>
                    <button class="show-more-btn" onclick="showProductDetails(5)">Show More</button>
                </div>
                <div class="card">
                    <img src="images/newhoodie1.png" alt="Nike Hoodie">
                    <p class="product-name">Nike Hoodie</p>
                    <p class="price">Rs:12500</p>
                    <button class="add-to-cart-btn"  onclick="addToCart('Nike Hoodie', 12500.00, 'images/newhoodie1.png')"><img src="images/icons8-cart-30.png"></button>
                    <button class="show-more-btn" onclick="showProductDetails(6)">Show More</button>
                </div>
                
                <div class="card">
                    <img src="images/glove1.jpg" alt="Gym Glove">
                    <p class="product-name">Gym Glove</p>
                    <p class="price">Rs:2000</p>
                    <button class="add-to-cart-btn" onclick="addToCart('Gym Glove', 2000.00, 'images/glove1.jpg')"><img src="images/icons8-cart-30.png"></button>
                    <button class="show-more-btn" onclick="showProductDetails(7)">Show More</button>
                </div>
                <div class="card">
                    <img src="images/newshort1.png" alt="Addidas Short">
                    <p class="product-name">Addidas Short</p>
                    <p class="price">Rs:5000</p>
                    <button class="add-to-cart-btn"  onclick="addToCart('Addidas Short', 5000.00, 'images/newshort1.png')"><img src="images/icons8-cart-30.png"></button>
                    <button class="show-more-btn" onclick="showProductDetails(8)">Show More</button>
                </div>
                <div class="card">
                    <img src="images/short2.jpg" alt="Addidas Short">
                    <p class="product-name">Addidas Short</p>
                    <p class="price">Rs:7000</p>
                    <button class="add-to-cart-btn" onclick="addToCart('Addidas Short', 7000.00, 'images/short2.jpg')"><img src="images/icons8-cart-30.png"></button>
                    <button class="show-more-btn" onclick="showProductDetails(9)">Show More</button>
                </div>
            </div>
          </div>

          <!--Product Card-->
          <div id="product-modal" class="modall" style="display: none;">
            <div class="modall-content">
              <span class="close-btn" onclick="closeModal()">&times;</span>
              <div class="product-image">
                <img id="modal-image" src="" alt="Product Image">
                <h1 id="modal-name"></h1>
                <h2 id="modal-tag"></h2>
                <p class="price" id="modal-price"></p>
                <p class="description" id="modal-description"></p>
                
              </div>
            </div>
          </div>
</section>




<section class="new-in-section">
      <h2>Supplements and Nutrition</h2>
      <p class="PP" >Fuel your body with essential vitamins, proteins, and nutrients to support peak performance. Add top supplements to your cart for a healthier you!</p>


      <!-- Cart -->
      <div id="cart-modal" class="modal">
      <div class="modal-header">
        <h2>Your Shopping Cart</h2>
        <span class="closes-btn" onclick="toggleCart()">&times;</span>
      </div>
      <div class="modal-body">
      <div id="cart-items" class="cart-items"></div>
      <div class="cart-total">
        <p>Total: <span id="cart-total-price">Rs:0.00</span></p>
      </div>
      </div>
      <div class="modal-footer">
        <a href="payment.html">
        <button class="checkout-btn" onclick="checkout()">Proceed to Checkout</button>
      </a>
      </div>
      </div>
      
      <!--scroll button-->
      <div class="scroll-container" id="shoes-scroll">
          <button class="pre-btn" id="preBtn">❮</button>
          <button class="nxt-btn" id="nxtBtn">❯</button>

          <!--cards-->
          <div class="scroll-content">
              <div class="card">
                  <img src="images/Way2.png" alt="Whey Protein"><br><br><br><br>
                  <p class="product-name">Whey Protein   <br></p>
                  <p class="price">Rs:35000.00</p>
                  <button class="add-to-cart-btn" onclick="addToCart('Whey Protein', 35000.00, 'images/WayProtine.png')"><img src="images/icons8-cart-30.png"></button>
                  <button class="show-more-btn" onclick="showProductDetails(10)">Show More</button>
                </div>
              
                <div class="card">
                  <img src="images/newSup2.png" alt="Casein Protein">
                  <p class="product-name">Casein Protein</p>
                  <p class="price">Rs:43000.00</p>
                  <button class="add-to-cart-btn" onclick="addToCart('Casein Protein', 43000.00, 'images/newSup2.png')"><img src="images/icons8-cart-30.png"></button>
                  <button class="show-more-btn" onclick="showProductDetails(11)">Show More</button>
                </div>
              <div class="card">
                  <img src="images/newSup3.png" alt="Plant-Based Protein">
                  <p class="product-name">Plant-Based Protein</p>
                  <p class="price">Rs:24200.00</p>
                  <button class="add-to-cart-btn" onclick="addToCart('Plant-Based Protein', 24200.00, 'images/newSup3.png')"><img src="images/icons8-cart-30.png"></button>
                  <button class="show-more-btn" onclick="showProductDetails(12)">Show More</button>
              </div>
              <div class="card">
                  <img src="images/newSup4.png" alt="Egg Protein">
                  <p class="product-name">Egg Protein</p>
                  <p class="price">Rs:30000.00</p>
                  <button class="add-to-cart-btn" onclick="addToCart('Egg Protein', 30000.00, 'images/newSup4.png')"><img src="images/icons8-cart-30.png"></button>
                  <button class="show-more-btn" onclick="showProductDetails(13)">Show More</button>
              </div>
              <div class="card">
                  <img src="images/newSup5.png" alt="C4 Original"><br><br>
                  <p class="product-name">C4 Original</p>
                  <p class="price">Rs:75200.00</p>
                  <button class="add-to-cart-btn" onclick="addToCart('C4 Original', 75200.00, 'images/newSup5.png')"><img src="images/icons8-cart-30.png"></button>
                  <button class="show-more-btn" onclick="showProductDetails(14)">Show More</button>
              </div>
              <div class="card">
                  <img src="images/newSup6.png" alt="Pre JYM"><br><br>
                  <p class="product-name">Pre JYM</p>
                  <p class="price">Rs:22000.00</p>
                  <button class="add-to-cart-btn" onclick="addToCart('Pre JYM', 22000.00, 'images/newSup6.png')"><img src="images/icons8-cart-30.png"></button>
                  <button class="show-more-btn" onclick="showProductDetails(15)">Show More</button>
              </div>
              <div class="card">
                  <img src="images/newSup7.png" alt="NitroSurge"><br><br>
                  <p class="product-name">NitroSurge</p>
                  <p class="price">Rs:40000.00</p>
                  <button class="add-to-cart-btn" onclick="addToCart('NitroSurge', 40000.00, 'images/newSup7.png')"><img src="images/icons8-cart-30.png"></button>
                  <button class="show-more-btn" onclick="showProductDetails(16)">Show More</button>
              </div>
              <div class="card">
                  <img src="images/newSup8.png" alt="Beyond Raw LIT"><br><br><br><br>
                  <p class="product-name">Beyond Raw LIT</p>
                  <p class="price">Rs:24000.00</p>
                  <button class="add-to-cart-btn" onclick="addToCart('Beyond Raw LIT', 24000.00, 'images/newSup8.png')"><img src="images/icons8-cart-30.png"></button>
                  <button class="show-more-btn" onclick="showProductDetails(17)">Show More</button>
              </div>
              <div class="card">
                  <img src="images/WayProtine.png" alt="Creatine HCL"><br><br><br><br>
                  <p class="product-name">Creatine HCL</p>
                  <p class="price">Rs:50000.00</p>
                  <button class="add-to-cart-btn" onclick="addToCart('Creatine HCL', 50000.00, 'images/WayProtine.png')"><img src="images/icons8-cart-30.png"></button>
                  <button class="show-more-btn" onclick="showProductDetails(18)">Show More</button>
              </div>
            </div>
          </div>

          <!--product card-->
          <div id="product-modal" class="modal" style="display: none;">
            <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <div class="product-image">
              <img id="modal-image" src="" alt="Product Image">
              <h1 id="modal-name"></h1>
              <h2 id="modal-tag"></h2>
              <p class="price" id="modal-price"></p>
              <p class="description" id="modal-description"></p>
            </div>
          </div>
        </div>
</section>


<section class="new-in-section">
    <h2>Fitness Gadgets and Tech</h2>
    <p class="PP" >Track health, improve workouts, and stay motivated—add the latest gear to your cart!</p>


      <!-- Cart Modal -->
      <div id="cart-modal" class="modal">
      <div class="modal-header">
        <h2 >Your Shopping Cart</h2>
        <span class="closes-btn" onclick="toggleCart()">&times;</span>
      </div>
      <div class="modal-body">
      <div id="cart-items" class="cart-items"></div>
      <div class="cart-total">
        <p>Total: <span id="cart-total-price">Rs:0.00</span></p>
      </div>
      </div>
      <div class="modal-footer">
        <button class="checkout-btn" onclick="checkout()"> to Checkout</button>
      </div>
      </div>
    

    <!--scroll button-->
    <div class="scroll-container" id="shoes-scroll">
        <button class="pre-btn" id="preBtn">❮</button>
        <button class="nxt-btn" id="nxtBtn">❯</button>

        <!--cards-->
        <div class="scroll-content">
            <div class="card">
                <img src="images/h1 (1).png" alt="Noice Earbuds">
                <p class="product-name">Noice Earbuds</p><br>
                <p class="price">Rs:10000.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('Noice Earbuds', 10000.00, 'images/h1 (1).png')"><img src="images/icons8-cart-30.png"></button>
                <button class="show-more-btn" onclick="showProductDetails(19)">Show More</button>
              </div>
            
              <div class="card">
                <img src="images/h1 (2).png" alt="Fitness tracker"><br><br><br><br>
                <p class="product-name">Fitness tracker</p>
                <p class="price">Rs:7000.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('Fitness tracker', 7000.00, 'images/h1 (2).png')"><img src="images/icons8-cart-30.png"></button>
                <button class="show-more-btn" onclick="showProductDetails(20)">Show More</button>
              </div>
            <div class="card">
                <img src="images/h1 (3).png" alt="smart watch"><br><br><br><br>
                <p class="product-name">smart watch</p>
                <p class="price">Rs:45000.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('smart watch', 45000.00, 'images/h1 (3).png')"><img src="images/icons8-cart-30.png"></button>
                <button class="show-more-btn" onclick="showProductDetails(21)">Show More</button>
            </div>
            <div class="card">
                <img src="images/h1 (4).png" alt="JBL headphone1"><br><br><br><br>
                <p class="product-name">JBL headphone1</p>
                <p class="price">Rs:35000.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('JBL headphone1', 35000.00, 'images/h1 (4).png')"><img src="images/icons8-cart-30.png"></button>
                <button class="show-more-btn" onclick="showProductDetails(22)">Show More</button>
            </div>
            <div class="card">
                <img src="images/h2.png" alt="JBL headphone2"><br><br>
                <p class="product-name">JBL headphone2</p>
                <p class="price">Rs:35000.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('JBL headphone2', 35000.00, 'images/h2.png')"><img src="images/icons8-cart-30.png"></button>
                <button class="show-more-btn" onclick="showProductDetails(23)">Show More</button>
            </div>
            <div class="card">
                <img src="images/h1 (6).png" alt="Shoe"><br><br><br><br>
                <p class="product-name">massage device</p>
                <p class="price">Rs:20000.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('massage device', 20000.00, 'images/h1 (6).png')"><img src="images/icons8-cart-30.png"></button>
                <button class="show-more-btn" onclick="showProductDetails(24)">Show More</button>
            </div>
            <div class="card">
                <img src="images/h1 (7).png" alt="muscle stimulators"><br><br><br><br>
                <p class="product-name">muscle stimulators</p>
                <p class="price">Rs:22000.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('muscle stimulatorse', 22000.00, 'images/h1 (7).png')"><img src="images/icons8-cart-30.png"></button>
                <button class="show-more-btn" onclick="showProductDetails(25)">Show More</button>
            </div>
          </div>
    <!--product Card-->
    <div id="product-modal" class="modal" style="display: none;">
      <div class="modal-content">
          <span class="close-btn" onclick="closeModal()">&times;</span>
          <div class="product-image">
            <img id="modal-image" src="" alt="Product Image">
            <h1 id="modal-name"></h1>
            <h2 id="modal-tag"></h2>
            <p class="price" id="modal-price"></p>
            <p class="description" id="modal-description"></p>
            
          </div>
        </div>
      </div>
</section>



<script>
        
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  updateCartBadge();

  function updateCartBadge() {
    const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
    document.getElementById("cart-count").textContent = cartCount;
  }

  function addToCart(name, price, image) {
    const existingItem = cart.find(item => item.name === name);
    if (existingItem) {
      existingItem.quantity += 1;
    } else {
      cart.push({ name, price, image, quantity: 1 });
    }
    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartBadge();
    displayCartItems();
    alert(`${name} added to cart!`);
  }

  function toggleCart() {
    const cartModal = document.getElementById("cart-modal");
    cartModal.style.display = cartModal.style.display === "none" || cartModal.style.display === "" ? "block" : "none";
    displayCartItems();
  }

  function displayCartItems() {
    const cartItemsContainer = document.getElementById("cart-items");
    cartItemsContainer.innerHTML = '';
    if (cart.length === 0) {
      cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
      updateCartTotal();
      updateCartBadge();
      return;
    }
    cart.forEach((item, index) => {
      const itemDiv = document.createElement("div");
      itemDiv.classList.add("cart-item");

      itemDiv.innerHTML = `
        <img src="${item.image}" alt="${item.name}">
        <div class="cart-item-info">
          <p>${item.name}</p>
          <p>Rs:${item.price.toFixed(2)}</p>
          <p>Quantity: 
            <button onclick="changeQuantity(${index}, -1)">-</button> 
            ${item.quantity} 
            <button onclick="changeQuantity(${index}, 1)">+</button>
          </p>
        </div>
        <button class="remove-item" onclick="removeItem(${index})">Remove</button>
      `;
      cartItemsContainer.appendChild(itemDiv);
    });

    localStorage.setItem('cartItems', JSON.stringify(cart));
    updateCartTotal();
  }


  function updateCartTotal() {
    const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    document.getElementById("cart-total-price").textContent = `Rs:${total.toFixed(2)}`;
  }


  function changeQuantity(index, change) {
    cart[index].quantity += change;

    if (cart[index].quantity <= 0) {
      removeItem(index);
    } else {
      localStorage.setItem("cart", JSON.stringify(cart));
      displayCartItems();
    }
  }


  function removeItem(index) {
    cart.splice(index, 1);
    localStorage.setItem("cart", JSON.stringify(cart));
    displayCartItems();
    updateCartBadge();
  }


  function checkout() {
      const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
      cart = [];
      localStorage.removeItem("cart");
      displayCartItems();
      updateCartBadge();
      const cartModal = document.getElementById("cart-modal");
      if (cartModal) {
        cartModal.style.display = "none";
      }
      window.location.href = `payment.html?amount=${total.toFixed(2)}`;
  }

</script>

    

<script>

const products = [
    {
      id: 1,
      image: "images/newS1.png",
      name: "Nike Shoe",
      price: "RS:15000",
      description: "Discover Nike's blend of performance and style, crafted with advanced cushioning and support for every workout. Ideal for all fitness levels, these shoes ensure comfort and durability, making them perfect for gym sessions and daily wear.",

    },
    {
      id: 2,
      image: "images/newSHOE4.png",
      name: "Hiking boots",
      price: "Rs:20000",
      description: "Built for rugged trails and tough terrain, our hiking boots provide exceptional grip, ankle support, and weather resistance. Perfect for outdoor enthusiasts, they ensure comfort and stability on any adventure, keeping your feet secure mile after mile.",
      
    },
    {
      id: 3,
      image: "images/shoe3.png",
      name: "Nike Air",
      price: "Rs:30000",
      description: "Lightweight comfort and responsive cushioning, perfect for workouts and everyday wear.",
      
    },
    {
      id: 4,
      image: "images/cap1.jpg",
      name: "Gym Cap",
      price: "Rs:2000",
      description: "Stay cool and focused during workouts with our breathable gym cap, designed for comfort and style. Perfect for any fitness routine!",
      
    },
    {
      id: 5,
      image: "images/newcap2.png",
      name: "Nike Cap",
      price: "Rs:2500",
      description: "Elevate your workout style with the Nike Cap, featuring a sleek design and moisture-wicking fabric for ultimate comfort and performance. Perfect for any training session!",
      
    },
    {
      id: 6,
      image: "images/newhoodie1.png",
      name: "Nike Hoodie",
      price: "Rs:12500",
      description: "Stay warm and stylish with the Nike Hoodie, crafted from soft, breathable fabric. Ideal for layering during workouts or for casual outings, it combines comfort and performance effortlessly.",
      
    },
    {
      id: 7,
      image: "images/glove1.jpg",
      name: "Gym Glove",
      price: "Rs:2000",
      description: "Enhance your grip and protect your hands during workouts with our gym gloves. Designed for comfort and durability, they provide support for weightlifting and other exercises, ensuring a secure hold every time.",
      
    },
    {
      id: 8,
      image: "images/newshort1.png",
      name: "Addidas Short",
      price: "Rs:5000",
      description: "Stay cool and comfortable during your workouts with Adidas Shorts, featuring breathable fabric and a lightweight design. Perfect for running, training, or lounging, they combine style and performance effortlessly.",
      
    },
    {
      id: 9,
      image: "images/short2.jpg",
      name: "Addidas Short",
      price: "Rs:7000",
      description: "Stay cool and comfortable during your workouts with Adidas Shorts, featuring breathable fabric and a lightweight design. Perfect for running, training, or lounging, they combine style and performance effortlessly.",
      
    },
    {
      id: 10,
      image: "images/Way2.png",
      name: "Whey Protein",
      price: "Rs:35000.00",
      description: "Fuel your fitness journey with our premium whey protein, packed with essential amino acids to support muscle growth and recovery. Perfect for post-workout shakes or anytime protein boost!",
      
    },
    {
      id: 11,
      image: "images/newSup2.png",
      name: "Casein Protein",
      price: "Rs:43000.00",
      description: "Ideal for overnight recovery and muscle repair.",
      
    },
    {
      id: 12,
      image: "images/newSup3.png",
      name: "Plant-Based Protein",
      price: "Rs:24200.00",
      description: "Perfect for vegans and vegetarians. Enjoy great flavor in every serving!",
      
    },
    {
      id: 13,
      image: "images/newSup4.png",
      name: "Egg Protein",
      price: "Rs:24200.00",
      description: "Complete source of essential amino acids for muscle repair and growth.",
      
    },
    {
      id: 14,
      image: "images/newSup5.png",
      name: "C4 Original",
      price: "Rs:75200.00",
      description: "Performance to help you conquer your toughest workouts and reach your fitness goals.",
      
    },
    {
      id: 15,
      image: "images/newSup6.png",
      name: "Pre JYM",
      price: "Rs:22000.00",
      description: "Endurance for serious athletes aiming to maximize performance and muscle growth.",
      
    },
    {
      id: 16,
      image: "images/newSup7.png",
      name: "NitroSurge",
      price: "Rs:40000.00",
      description: "Powerful pre-workout that boosts energy, focus, and endurance to help you tackle the toughest workouts and achieve your fitness goals.",
      
    },
    {
      id: 17,
      image: "images/newSup8.png",
      name: "Beyond Raw LIT",
      price: "Rs:24000.00",
      description: "Unleash your potential with Beyond Raw LIT, a premium pre-workout that boosts energy, focus, and endurance to help you power through intense workouts and achieve peak performance.",
      
    },
    {
      id: 18,
      image: "images/WayProtine.png",
      name: "Creatine HCL",
      price: "Rs:50000.00",
      description: "Boost strength and performance with Creatine HCL, a highly soluble form of creatine that enhances muscle power and recovery without bloating. Perfect for achieving your fitness goals!",
      
    },
    {
      id: 19,
      image: "images/h1 (1).png",
      name: "Noice Earbuds",
      price: "Rs:10000.00",
      description: "Experience exceptional sound and comfort with Noice Earbuds. Featuring noise cancellation, a secure fit, and long battery life, they’re perfect for workouts and daily use!",
      
    },
    {
      id: 20,
      image: "images/h1 (2).png",
      name: "Fitness tracker",
      price: "Rs:7000.00",
      description: "Track your health and fitness goals with our sleek fitness tracker. Monitor steps, heart rate, and sleep patterns to stay motivated and improve your overall wellness!",
      
    },
    {
      id: 21,
      image: "images/h1 (3).png",
      name: "smart watch",
      price: "Rs:45000.00",
      description: "Stay connected and track your fitness with our smart watch, featuring health monitoring, customizable alerts, and fitness tracking. It’s your perfect companion for an active lifestyle!",
      
    },
    {
      id: 22,
      image: "images/h1 (4).png",
      name: "JBL headphone1",
      price: "Rs:35000.00",
      description: " Experience immersive sound and comfort with JBL Headphones. Perfect for music lovers and fitness enthusiasts, they offer powerful audio and long battery life for workouts and daily use.",
      
    },
    {
      id: 23,
      image: "images/h2.png",
      name: "JBL headphone2",
      price: "Rs:35000.00",
      description: " Perfect for music lovers and fitness enthusiasts, they offer powerful audio and long battery life for workouts and daily use.",
      
    },
    {
      id: 24,
      image: "images/h1 (6).png",
      name: "massage device",
      price: "Rs:20000.00",
      description: "Relieve tension and enhance recovery with our massage device. Designed for targeted relief, it promotes relaxation and helps soothe sore muscles after workouts.",
      
    },
    {
      id: 25,
      image: "images/h1 (7).png",
      name: "muscle stimulators",
      price: "Rs:22000.00",
      description: "Designed to stimulate muscles, they promote blood flow, reduce soreness, and aid in muscle rehabilitation. Perfect for athletes and fitness enthusiasts!",
      
    },
  ];

    function showProductDetails(productId) {
      const product = products.find(p => p.id === productId);

      if (product) {
        document.getElementById("modal-image").src = product.image;
        document.getElementById("modal-name").textContent = product.name;
        document.getElementById("modal-tag").textContent = product.tag;
        document.getElementById("modal-price").textContent = product.price;
        document.getElementById("modal-description").textContent = product.description;

        document.getElementById("product-modal").style.display = "flex";
        document.getElementById("overlay").style.display = "block";

      }
    }

    function closeModal() {
      document.getElementById("product-modal").style.display = "none";
      document.getElementById("overlay").style.display = "none";
    }

</script>


<script>

  document.getElementById('searchInput').addEventListener('keydown', function(event) {
      if (event.key === 'Enter') {
          filterItems();
      }
  });

  function filterItems() {
      const input = document.getElementById('searchInput').value.toUpperCase();
      const cards = document.querySelectorAll('.card');
      const noResultsMessage = document.getElementById('noResultsMessage');
      let noResults = true;

      cards.forEach(card => {
          const productName = card.querySelector('.product-name').textContent.toUpperCase();
          const category = card.querySelector('.product-category') ? card.querySelector('.product-category').textContent.toUpperCase() : '';

          
          if (productName.includes(input) || category.includes(input) || input === '') {
              card.style.display = ''; 
              noResults = false; 
          } else {
              card.style.display = 'none';
          }
      });
      if (noResults) {
          noResultsMessage.style.display = 'block';
          noResultsMessage.textContent = 'No items found for the entered search term.';
      } else {
          noResultsMessage.style.display = 'none';
      }
  }



  const ScrollContents = [...document.querySelectorAll('.scroll-content')];

  const nxtBtn = [...document.querySelectorAll('.nxt-btn')];

  const preBtn = [...document.querySelectorAll('.pre-btn')];

  ScrollContents.forEach((item, i) => {
    let contentDimentions = item.getBoundingClientRect();
    let contentWidth = contentDimentions.width;

      nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += contentWidth;
      });

      preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= contentWidth;
      });

  });

</script>

</body>
</html>