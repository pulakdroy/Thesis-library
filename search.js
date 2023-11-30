// Sample book data with file paths
var books = [
    { name: "A newly developed CNN Model for Eye Disease Detection,Khalil sir, spring2022", path: "thesis.papers/khalilsir1.pdf" },
    { name: "Clean Code eye", path: "path/to/clean_code.pdf" },
    { name: "The Great Gatsby", path: "path/to/great_gatsby.pdf" },
    { name: "To Kill  eye a Mockingbird", path: "path/to/to_kill_a_mockingbird.pdf" },
    { name: "The Catcher in the Rye", path: "path/to/catcher_in_the_rye.pdf" }
];

function searchBooks() {
    var searchTerm = document.getElementById('search-box').value.toLowerCase();
    var resultContainer = document.getElementById('result-container');

    // Clear previous results
    resultContainer.innerHTML = '';

    // Perform the search on the client side
    var matchingBooks = books.filter(function(book) {
        return book.name.toLowerCase().includes(searchTerm);
    });

    // Display the matching books in the result container
    if (matchingBooks.length > 0) {
        var resultList = document.createElement('ul');
        matchingBooks.forEach(function(book) {
            var listItem = document.createElement('li');
            
            // Create a clickable link for each book
            var link = document.createElement('a');
            link.href = book.path;
            link.textContent = book.name;
            link.target = "_blank"; // Open link in a new tab

            listItem.appendChild(link);
            resultList.appendChild(listItem);
        });
        resultContainer.appendChild(resultList);
    } else {
        resultContainer.textContent = 'No matching books found.';
    }
}