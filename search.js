// Sample book data with file paths
var books = [
    { name: "A newly developed CNN Model for Eye Disease Detection,Khalil sir, spring2022", path: "thesis.papers/khalilsir1.pdf" },
    { name: "ML", path: "#" },
    { name: "AI", path: "#" },
    { name: "NLP", path: "#" },
    { name: "Deep fake", path: "#" },
    { name: "Dr. Mohammad Kaykobad", path: "faculty1.html" },
    { name: "Dr. Md. Khalilur Rahman", path: "faculty2.html" },
    { name: "Dr. Amitahba Chakrabarty", path: "faculty3.html" },
    { name: "Dr. Muhammad Iqbal Hossain", path: "faculty4.html" },
    { name: "Tawhid Anwar", path: "faculty5.html" },
    { name: "Nishat Nayla", path: "faculty6.html" }
    
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