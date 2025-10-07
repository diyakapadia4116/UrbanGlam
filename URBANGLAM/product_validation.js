
function validateProduct() 
{

    const size = document.getElementById('size').value;
    const quantity = parseInt(document.getElementById('quantity').value);

    const productDiv = document.querySelector('.right');
    const id = productDiv.dataset.id;
    const name = productDiv.dataset.name;
    const price = parseFloat(productDiv.dataset.price);
    const image = productDiv.dataset.image;

    if(quantity<0 || quantity>10)
    {
        alert("Quantity should be between 1-10 only!");
        return false;
    }

    const product = {
        id: id, // change accordingly for each product
        name: name,
        price: price,
        size: size,
        quantity: quantity,
        image: image
    };

    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    const existing = cart.find(p => p.id === product.id && p.size === product.size);
    if (existing) {
        existing.quantity += quantity;
    } else {
        cart.push(product);
    }

    localStorage.setItem("cart", JSON.stringify(cart));

    // Show the popup
    document.getElementById("PopUp").style.display = "block";
    return false;
}

function closePopUp() {
    document.getElementById("PopUp").style.display = "none";
}


