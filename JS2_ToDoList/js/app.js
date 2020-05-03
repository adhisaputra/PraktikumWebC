// New-task
var taskInput = document.getElementById("new-task");
var addButton = document.getElementsByTagName("button")[0];
var incompleteTasksHolder = document.getElementById("daftar");
var completedTasksHolder = document.getElementById("selesai");

// New Task List Item
var createNewTaskElement = function (taskString) {
  var listItem = document.createElement("li");          // List Item
  var checkBox = document.createElement("input");       // Input checkbox
  var label = document.createElement("label");          // Label
  var editInput = document.createElement("input");      // Input teks
  var editButton = document.createElement("button");    // tombol ubah
  var deleteButton = document.createElement("button");  // tombol hapus

  checkBox.type = "checkbox"
  editInput.type = "text";
  editButton.innerText = "Ubah";
  editButton.className = "edit";
  deleteButton.innerText = "Hapus";
  deleteButton.className = "delete";
  label.innerText = taskString;

  // penambahan pada setiap elemen
  listItem.appendChild(checkBox);
  listItem.appendChild(label);
  listItem.appendChild(editInput);
  listItem.appendChild(editButton);
  listItem.appendChild(deleteButton);

  return listItem;
};

// menambahkan task baru
var addTask = function () {
  var listItemName = taskInput.value || "new item";
  var listItem = createNewTaskElement(listItemName);  // Buat daftar item baru dengan teks dari #new-task
  incompleteTasksHolder.appendChild(listItem);        // menambahkan daftar baru ke incompleteTasksHolder
  bindTaskEvents(listItem, taskCompleted);
  taskInput.value = "";
};

// Edit task yg ada
var editTask = function () {
  var listItem = this.parentNode;                               // Membuat item list
  var editInput = listItem.querySelector("input[type=text");
  var label = listItem.querySelector("label");
  var button = listItem.getElementsByTagName("button")[0];

  var containsClass = listItem.classList.contains("editMode");  // check dari .editMode dan ditetapkan menjadi variable
  if (containsClass) {                                          // beralih dari.editMode
    label.innerText = editInput.value;                          // teks label menjadi inputan
    button.innerText = "Ubah";
  } else {                                                      // beralih ke .editMode
    editInput.value = label.innerText;                          // Nilai input menjadi teks label
    button.innerText = "Simpan";
  }
  listItem.classList.toggle("editMode");                        // Toggle .editMode pada parent
};

// Hapus task yg ada
var deleteTask = function () {
  var listItem = this.parentNode;
  var ul = listItem.parentNode;
  ul.removeChild(listItem);
};

// Beri tanda ketika task selesai
var taskCompleted = function () {
  var listItem = this.parentNode;
  completedTasksHolder.appendChild(listItem);
  bindTaskEvents(listItem, taskIncomplete);
};

// Beri tanda ketika task belum selesai
var taskIncomplete = function () {
  var listItem = this.parentNode;
  incompleteTasksHolder.appendChild(listItem);
  bindTaskEvents(listItem, taskCompleted);
};

var bindTaskEvents = function (taskListItem, checkBoxEventHandler) {
  var checkBox = taskListItem.querySelector("input[type=checkbox]");
  var editButton = taskListItem.querySelector("button.edit");
  var deleteButton = taskListItem.querySelector("button.delete");
  editButton.onclick = editTask;
  deleteButton.onclick = deleteTask;
  checkBox.onchange = checkBoxEventHandler;
};

var ajaxRequest = function () {
  console.log("AJAX request");
};

addButton.addEventListener("click", addTask);
addButton.addEventListener("click", ajaxRequest);

for (var i = 0; i < incompleteTasksHolder.children.length; i++) {
  bindTaskEvents(incompleteTasksHolder.children[i], taskCompleted);
}

for (var i = 0; i < completedTasksHolder.children.length; i++) {
  bindTaskEvents(completedTasksHolder.children[i], taskIncomplete);
}