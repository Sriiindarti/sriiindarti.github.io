const webName = document.getElementById('webName');
const link = document.getElementById('link');
const category = document.getElementById('category');

const addBtn = document.getElementById('addBtn');
const updateBtn = document.getElementById('updateBtn');
const removeBtn = document.getElementById('removeBtn');
const clearBtn = document.getElementById('clearBtn');

var nomorUrut = 0;

const database = firebase.database(); //instance database
const db = firebase.firestore();

const ilusRef = database.ref('/illustration'); //dibikin wadah


// --------------Create Data-------------- //

addBtn.addEventListener('click', e => {
      ilusRef.child(webName.value).set({
            web_name : webName.value,
            link : link.value,
            kat : category.value,
      });
      alert("DATA BERHASIL DITAMBAH");
  });


// --------------Update Data-------------- //

updateBtn.addEventListener('click', e => {
      const newData = {
            web_name : webName.value,
            link : link.value,
            kat : category.value,
      };
      ilusRef.child(webName.value).update(newData)
      location.reload();
      alert("DATA BERHASIL DIUPDATE");
  });

// --------------Delete Data-------------- //

removeBtn.addEventListener('click', e => {
      ilusRef.child(webName.value).remove()
      .then(() => {
          location.reload();
      })
      .catch(error => {
          console.error();
      });
      alert("DATA BERHASIL DIHAPUS");         
  });


// --------------Get & Read Data-------------- //

var nomorBaris = ++nomorUrut;

ilusRef.on("child_added", function (data) {

      const ilusRef = data.val();

      const row = table.insertRow(table.rows.length);

      const td1 = row.insertCell(0);
      const td2 = row.insertCell(1);
      const td3 = row.insertCell(2);
      const td4 = row.insertCell(3);

      td1.innerHTML = ++nomorUrut;
      td2.innerHTML = dataEmp.web_name;
      td3.innerHTML = dataEmp.link;
      td4.innerHTML = dataEmp.kat;

});