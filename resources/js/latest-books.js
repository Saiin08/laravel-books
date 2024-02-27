const loadData = async () => {
    const response = await fetch("/api/books/latest");
    const data = await response.json();

    const latestBooks = document.getElementById("latest-books");

    data.forEach((book) => {
        // document.getElementById("loader").style.display = "block";
        const bookEl = document.createElement("div");
        bookEl.classList.add("book");
        bookEl.innerHTML = `
      <h2>${book.title}</h2>
      <p><strong>Price: </strong>${book.price}</p>
      <img src="${book.image}" alt="${book.title}" width:"150px">
      <p><strong>ISBN: </strong>${book.isbn}</p>
      <p><strong>Format: </strong>${book.format}</p>
      <p><strong>Edition: </strong>${book.edition}</p>
      <p><strong>Pages: </strong>${book.pages}</p>
      <p><strong>Description: </strong>${book.description}</p>
      
      <br><br>
    `;
        latestBooks.appendChild(bookEl);
    });
};

loadData();
