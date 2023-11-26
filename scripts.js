function filterFaculty() {
    // Get input value from the search box
    var input = document.getElementById("searchInput");
    var filter = input.value.toUpperCase();

    // Get all faculty profiles
    var facultyProfiles = document.querySelectorAll(".faculty-profile");

    // Loop through each profile and hide those that don't match the search query
    facultyProfiles.forEach(function (profile) {
        var facultyName = profile.querySelector("h2").innerText.toUpperCase();
        if (facultyName.includes(filter)) {
            profile.style.display = "";
        } else {
            profile.style.display = "none";
        }
    });

    // Display search note
    var searchNote = document.getElementById("searchNote");
    if (filter !== "") {
        searchNote.innerText = `Showing results for: ${filter}`;
    } else {
        searchNote.innerText = "";
    }
}
