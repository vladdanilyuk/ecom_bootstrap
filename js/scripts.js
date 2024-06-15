function showDetails(productId) {
    fetch('product_details.php?id=' + productId)
        .then(response => response.text())
        .then(data => {
            document.getElementById('modal-details').innerHTML = data;
            $('#productModal').modal('show');
        });
}
