function abrirRedeSocial() {
alert("Você será redirecionado para a página de rede social.");
window.location.href = "redesocial.php";
}


document.addEventListener("DOMContentLoaded", function () {

    const redes = document.querySelectorAll(".rede-social");

    redes.forEach(function (item) {

        item.addEventListener("click", function () {

            const nome = this.getAttribute("data-rede");

            alert("Você será redirecionado para a página de " + nome);

            window.location.href = "../html/redesocial.php";

        });

    });

});