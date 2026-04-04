// ===== Static Data =====
const unitPrice = 1000;

// select elements
const qtyInput = document.getElementById("quantity");
const totalField = document.getElementById("total");

// realtime event
qtyInput.addEventListener("input", calculateTotal);

// function
function calculateTotal() {

    // 🔥 string → number convert
    let qty = Number(qtyInput.value);

    // validation (negative prevent)
    if (qty < 0 || isNaN(qty)) {
        qty = 0;
        qtyInput.value = 0;
    }

    // calculation
    let total = unitPrice * qty;

    // show result instantly
    totalField.value = total;

    // gift coupon alert
    if (total > 1000) {
        alert("You are eligible for a gift coupon!");
    }
}

// page load এও run হবে
calculateTotal();