document.getElementById("Submit").addEventListener("click",lag);
function lag(event) {
    event.preventDefault();

    var formData = new FormData();
    var groupname = document.getElementById("group_name").value;
    var comment = document.getElementById("comment").value;
    formData.append("group_name", groupname);
    formData.append("comment", comment);

    var request = new XMLHttpRequest();
    request.onload = function() {
        //This is where you handle what to do with the response.
        // The actual data is found on this.responseText
        document.getElementById('demo').innerHTML = this.responseText;
    };

    request.open("POST", "config_files/listpost.php");
    request.send(formData);
}