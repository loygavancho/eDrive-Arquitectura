console.log('enlazado a js');
fetch('./data1.php')
    .then(response => response.json())
    .then(data => {
        // Manipula los datos JSON recibidos y actualiza tu interfaz HTML con la información deseada
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });