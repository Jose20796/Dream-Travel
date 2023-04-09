function verProducto(id) {
  $("#myModal").modal("show");
  $("#verProducto").load("ProductController.php?accion=viewProduct&id=" + id);
}

function eliminarProducto(id) {
  Swal.fire({
    title: "Está seguro que deseas eliminar el producto?",
    text: "No podrá revertir esto!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, eliminar!",
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = "ProductController.php?accion=delete&id=" + id;
    } else {
      Swal.fire("No se eliminó el producto");
    }
  });
}

function actualizarProducto(id) {
  location.href = "ProductController.php?accion=update&id=" + id;
}
