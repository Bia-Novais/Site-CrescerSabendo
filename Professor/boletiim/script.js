function editarNota(id, aluno, materia, nota) {
    var novoAluno = prompt("Editar nome do aluno:", aluno);
    var novaMateria = prompt("Editar matéria:", materia);
    var novaNota = prompt("Editar nota:", nota);
  
    if (novoAluno !== null && novaMateria !== null && novaNota !== null) {
      // Enviar os dados editados para o servidor (pode usar AJAX ou fetch)
      // Atualizar a linha na tabela com os novos valores
    }
  }
  
  function excluirNota(id) {
    if (confirm("Tem certeza que deseja excluir esta nota?")) {
      // Enviar o ID da nota para o servidor para exclusão
      // Remover a linha da tabela
    }
  }
  