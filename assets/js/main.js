
get_books();
function get_books() {
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
      // console.log(JSON.parse(xmlhttp.responseText));

      var books = JSON.parse(xmlhttp.responseText);
      var table = document.getElementById('tbl_books');
      table.innerHTML = null;
      for (var i = 0; i < books.length; i++) {
        var row = table.insertRow(i);

        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);

        cell1.innerHTML = books[i][1];
        cell2.innerHTML = books[i][2];
        cell3.innerHTML = books[i][3];
        cell4.innerHTML = books[i][4];
        cell5.innerHTML = books[i][5];
        cell6.innerHTML = books[i][6];

        var cell7 = row.insertCell(6);
        cell7.innerHTML = 
          '<button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal" onclick="set_edit_id('+ books[i][0] +')">\
            EDIT\
          </button>\
          <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="set_delete_id('+ books[i][0] +')">\
            DEL\
          </button>';
      }
    }
  };

  xmlhttp.open("GET", base_url + "system/controller_page.php?a=get_books", true);
  xmlhttp.send();
}
function add_book() {
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
      if (xmlhttp.responseText == 1) {
        alert('Added Successfully!');
        get_books();
      } else {
        alert('Something went wrong.');
      }
    }
  };
  let title = document.getElementById('inp_add_title').value;
  let isbn = document.getElementById('inp_add_isbn').value;
  let author = document.getElementById('inp_add_author').value;
  let publisher = document.getElementById('inp_add_publisher').value;
  let year_published = document.getElementById('inp_add_year_published').value;
  let category = document.getElementById('inp_add_category').value;
  xmlhttp.open("GET", base_url + "system/controller_page.php?a=add_book&title="+ title +"&isbn="+ isbn +"&author="+ author +"&publisher="+ publisher +"&year_published="+ year_published +"&category="+ category, true);
  xmlhttp.send();
  document.getElementById('inp_add_title').value = null;
  document.getElementById('inp_add_isbn').value = null;
  document.getElementById('inp_add_author').value = null;
  document.getElementById('inp_add_publisher').value = null;
  document.getElementById('inp_add_year_published').value = null;
  document.getElementById('inp_add_category').value = null;
}
function edit_book() {
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
      if (xmlhttp.responseText == 1) {
        alert('Edited Successfully!');
        get_books();
      } else {
        alert('Something went wrong.');
      }
    }
  };
  let title = document.getElementById('inp_edit_title').value;
  let isbn = document.getElementById('inp_edit_isbn').value;
  let author = document.getElementById('inp_edit_author').value;
  let publisher = document.getElementById('inp_edit_publisher').value;
  let year_published = document.getElementById('inp_edit_year_published').value;
  let category = document.getElementById('inp_edit_category').value;
  let id = document.getElementById('inp_edit_id').value;
  xmlhttp.open("GET", base_url + "system/controller_page.php?a=update_book&title="+ title +"&isbn="+ isbn +"&author="+ author +"&publisher="+ publisher +"&year_published="+ year_published +"&category="+ category +"&id="+ id, true);
  xmlhttp.send();
  document.getElementById('inp_edit_title').value = null;
  document.getElementById('inp_edit_isbn').value = null;
  document.getElementById('inp_edit_author').value = null;
  document.getElementById('inp_edit_publisher').value = null;
  document.getElementById('inp_edit_year_published').value = null;
  document.getElementById('inp_edit_category').value = null;
  document.getElementById('inp_edit_id').value = null;
}
function get_book(id) {
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
      if (xmlhttp.responseText) {
        var book = JSON.parse(xmlhttp.responseText);
        document.getElementById('inp_edit_title').value = book[1];
        document.getElementById('inp_edit_isbn').value = book[2];
        document.getElementById('inp_edit_author').value = book[3];
        document.getElementById('inp_edit_publisher').value = book[4];
        document.getElementById('inp_edit_year_published').value = book[5];
        document.getElementById('inp_edit_category').value = book[6];
      }
    }
  };
  xmlhttp.open("GET", base_url + "system/controller_page.php?a=get_book&id="+ id, true);
  xmlhttp.send();
}
function delete_book() {
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
      if (xmlhttp.responseText == 1) {
        alert('Deleted Successfully!');
        get_books();
      } else {
        alert('Something went wrong.');
      }
    }
  };
  let id = document.getElementById('inp_delete_id').value;
  xmlhttp.open("GET", base_url + "system/controller_page.php?a=delete_book&id="+ id, true);
  xmlhttp.send();
  document.getElementById('inp_delete_id').value = null;
}
function set_edit_id(id) {
  document.getElementById('inp_edit_id').value = id;
  get_book(id);
}
function set_delete_id(id) {
  document.getElementById('inp_delete_id').value = id;
  get_book(id);
}