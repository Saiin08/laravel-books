const search = document.querySelector(".search");
const result = document.querySelector(".result");

search.addEventListener("input", async (event) => {
    result.innerHTML = "";
    let value = event.target.value;

    if (value && value != "") {
        const response = await fetch("/api/books/search?search=" + value);
        const data = await response.json();

        data.forEach((book) => {
            result.innerHTML += `<p>${book.title}</p>`;
        });
    }
});
