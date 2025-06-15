import Swal from "sweetalert2";

document.querySelectorAll('.btn-excluir').forEach(button => {
  button.addEventListener('click', function() {
    const form = this.closest('form');
    const nome = this.dataset.nome;

    Swal.fire({
      title: `Tem certeza que deseja excluir?`,
      text: "Você não poderá reverter isso!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sim, excluir!"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Excluído!',
          `Conteúdo foi excluído com sucesso.`,
          'success'
        ).then(() => {
          form.submit();
        });
      }
    });
  });
});

document.querySelectorAll('.atualizar').forEach(button => {
  button.addEventListener('click', function() {
    const form = this.closest('form');

    Swal.fire({
    title: "Salvo!",
    icon: "success",
    draggable: true
  }).then(() => {
    form.submit();
  });
  });
});

