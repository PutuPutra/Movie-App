$(document).ready(function () {
    let typingTimer; // Variable to hold the timeout
    const doneTypingInterval = 500; // Delay in milliseconds (500ms = 0.5 second)

    function searchMovie() {
        $.ajax({
            url: "https://www.omdbapi.com",
            type: "get",
            dataType: "json",
            data: {
                apikey: "92e55188",
                s: $("#search-input").val(),
            },
            success: function (result) {
                $("#movie-list").empty(); // Clear the content before adding new
                if (result.Response == "True") {
                    let movies = result.Search;

                    $.each(movies, function (i, data) {
                        $("#movie-list").append(`
                            <div class="col-md-4 mb-6">
                                <div class="bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                                    <div class="relative">
                                        <img src="${data.Poster}" alt="${data.Title}" class="w-full h-[900px] object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                                            <a href="#" class="text-white text-lg font-bold bg-indigo-500 hover:bg-indigo-600 px-4 py-2 rounded-full details"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="${data.imdbID}">
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="text-lg font-semibold text-white truncate">${data.Title}</h5>
                                        <h6 class="text-gray-400">Year: ${data.Year}</h6>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                } else {
                    $("#movie-list").html(`
                        <div class="col-span-full text-center text-xl text-gray-300">
                            ${result.Error}
                        </div>
                    `);
                }
            },
        });
    }

    // Search button click handler
    $("#search-form").on("submit", function (e) {
        e.preventDefault(); // Prevent form submission
        searchMovie();
    });

    // Trigger search after user finishes typing
    $("#search-input").on("touchstart input", function () {
        clearTimeout(typingTimer); // Clear the previous timer

        if ($("#search-input").val().length > 2) {
            typingTimer = setTimeout(function () {
                searchMovie(); // Call the search function after a delay
            }, doneTypingInterval);
        }
    });

    // Modify the event binding for the details link
    $("#movie-list").on("click", ".details", function () {
        var imdbID = $(this).data("id");

        // Redirect to the show page with the imdbID in the URL
        window.location.href = `/movie/show/${imdbID}`;
    });
});
