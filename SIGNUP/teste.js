function toggleDropdown() {
          const dropdown = document.querySelector('.dropdown');
          dropdown.classList.toggle('show');
        }
        
        var senhaInput = document.getElementById('senha');
        var confirmarSenhaInput = document.getElementById('confirmar-senha');
        var mensagemSenha = document.getElementById('mensagem-senha');
        
        function verificarSenha() {
          var senha = senhaInput.value;
          var confirmarSenha = confirmarSenhaInput.value;
          var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
        
          if (senha !== confirmarSenha) {
            mensagemSenha.textContent = "As senhas não coincidem.";
          } else if (!pattern.test(senha)) {
            mensagemSenha.textContent = "A senha deve ter pelo menos 8 caracteres, uma letra maiúscula, uma letra minúscula e um número.";
          } else {
            mensagemSenha.textContent = "";
          }
        }
        
        senhaInput.addEventListener('input', verificarSenha);
        confirmarSenhaInput.addEventListener('input', verificarSenha);
        
        