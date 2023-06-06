    // Função para adicionar quantidade
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    function adicionarQuantidade(element) {
      var input = $(element).siblings('input');
      var quantidade = parseInt(input.val()) || 0;
      input.val(quantidade + 1);
    }

    // Função para remover quantidade
    function removerQuantidade(element) {
      var input = $(element).siblings('input');
      var quantidade = parseInt(input.val()) || 0;
      if (quantidade > 0) {
        input.val(quantidade - 1);
      }
    }