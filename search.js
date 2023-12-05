// Sample book data with file paths
var books = [
    { name: "A newly developed CNN Model for Eye Disease Detection,Khalil sir, spring2022, ML, ml", path: "thesis.papers/khalilsir1.pdf" },
    { name: "ML", path: "thesis.papers/khalilsir1.pdf" },
    { name: "AI ML", path: "thesis.papers/khalilsir1.pdf" },
    // { name: "NLP",  path: "thesis.papers/iqbalsir1.pdf" },
    // { name: "nlp",  path: "thesis.papers/iqbalsir1.pdf" },
    { name: "Deepfake detection Using Neural Networks, Iqbal sir, fall2021, NLP, nlp", path: "thesis.papers/iqbalsir1.pdf" },
    { name: "Dr. Mohammad Kaykobad", path: "faculty1.php" },
    { name: "Dr. Md. Khalilur Rahman", path: "faculty2.php" },
    { name: "Dr. Amitahba Chakrabarty", path: "faculty3.php" },
    { name: "Dr. Muhammad Iqbal Hossain", path: "faculty4.php" },
    { name: "Tawhid Anwar", path: "faculty5.php" },
    { name: "Nishat Nayla", path: "faculty6.php" }
    
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