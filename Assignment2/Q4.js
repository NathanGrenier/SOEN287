function calculateOrder() {
    let table = document.getElementById("orderSheet");
    let items = table.getElementsByClassName("item");

    let totalCost = 0;
    for (let item of items) {
        let itemName = item.getElementsByClassName("name")[0].innerHTML;
        let itemCount = item.getElementsByClassName("count")[0].value;
        let itemPrice = parseInt(item.getElementsByClassName("price")[0].innerHTML.replace(/[^0-9.]/g, ""));
        let cost = itemCount * itemPrice;
        totalCost += cost;

        if (!parseInt(itemCount)) {
            totalCost = "Invalid";
            alert("Invalid input");
            break;
        }

        // Check to see if element already exists
        if (document.getElementById(itemName)) {
            let display = document.getElementById(itemName);
            let bold = display.firstChild;
            bold.innerHTML = `${itemName} (Quantity=${itemCount}):`;
            display.innerHTML = ""; // Reset innerHTML
            display.appendChild(bold);
            display.innerHTML += ` $${cost}`;
        } else {
            let display = document.createElement("div");
            display.setAttribute("id",itemName);
            let bold = document.createElement("span");
            bold.style.fontWeight = "bold";
            document.body.appendChild(display);
            display.appendChild(bold);
            bold.innerHTML = `${itemName} (Quantity=${itemCount}):`;
            display.innerHTML += ` $${cost}`;
        }
    }

    if (document.getElementById("displayTotal")) {
        let displayTotal = document.getElementById("displayTotal");
        let bold = displayTotal.firstChild;
        displayTotal.innerHTML = "";
        displayTotal.appendChild(bold);
        displayTotal.innerHTML += ` $${totalCost}`;
    } else {
        let displayTotal = document.createElement("p");
        displayTotal.setAttribute("id","displayTotal");
        let bold = document.createElement("span");
        bold.style.fontWeight = "bold";
        document.body.appendChild(displayTotal);
        displayTotal.appendChild(bold);
        bold.innerHTML = "Final Total: ";
        displayTotal.innerHTML += `$${totalCost}`;
    }

}