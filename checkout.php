

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">



    <title>Checkout</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1rem;
        }

        th,
        td {
            text-align: left;
            padding: 0.5rem;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="number"] {
            width: 4rem;
            text-align: center;
            border: none;
            background-color: #f2f2f2;
            padding: 0.5rem;
        }

        select {
            padding: 0.5rem;
            background-color: #f2f2f2;
            border: none;
            font-size: inherit;
        }

        .total {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 1rem;
        }

        .product-img {
            width: 10%;
        }

        .button {
            background-color: #000;
            text-transform: uppercase;
            font-size: 0.8rem;
            font-weight: 600;
            display: block;
            color: #fff;
            width: 100%;
            padding: 1rem;
            border-radius: 0.25rem;
            border: 0;
            cursor: pointer;
            outline: 0;
        }

        .button:focus-visible {
            background-color: #333;
        }
    </style>
    <script src="js/script.js" defer></script>
</head>

<body>

    <h1>Checkout</h1>
    

    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <!-- Cart items will be here -->
        </tbody>
    </table>
    <p class="total">Total: ₹ 0.00</p>



    <button id="continue-button" class="button">Continue</button>


</body>
<script>
    const cartItems = JSON.parse(localStorage.getItem('cartItems'));

    function updateCart() {
        const cartTableBody = document.querySelector('tbody');
        let total = 0;
        cartTableBody.innerHTML = '';
        cartItems.forEach(item => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
      <td>
        <img class="product-img" src="${item.img}" alt="">
        ${item.title}
      </td>
      <td class="item-total">${item.price}</td>
      <td>
        <select onchange="updateItemTotal(this, ${item.price.slice(1)}, ${item.id})">
          <option value="1" ${item.quantity === 1 ? 'selected' : ''}>1</option>
          <option value="2" ${item.quantity === 2 ? 'selected' : ''}>2</option>
          <option value="3" ${item.quantity === 3 ? 'selected' : ''}>3</option>
          <option value="4" ${item.quantity === 4 ? 'selected' : ''}>4</option>
          <option value="5" ${item.quantity === 5 ? 'selected' : ''}>5</option>
        </select>
      </td>
      <td class="item-price">${item.price}</td>
    `;
            cartTableBody.appendChild(tr);
            total += parseInt(item.price.slice(1)) * item.quantity;
            localStorage.setItem(`quantity_${item.id}`, item.quantity); // set the quantity in local storage
        });
        document.querySelector('.total').textContent = `Total: ₹${total}.00`;
    }



    function updateItemTotal(input, price) {
        const quantity = input.value;
        const itemTotal = price * quantity;
        input.parentElement.nextElementSibling.textContent = `₹${itemTotal}.00`;
        updateTotal(); // call updateTotal function to update the total amount
    }



    function updateTotal() {
        const itemPrices = document.querySelectorAll('.item-price');
        let total = 0;
        itemPrices.forEach(itemPrice => {
            total += parseInt(itemPrice.textContent.slice(1));
        });
        document.querySelector('.total').textContent = `Total: ₹${total}.00`;
    }
    window.onload = () => {
        if (cartItems) {
            updateCart();
        }
    };
</script>

</html>