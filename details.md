# Candidato

**Nome**: Bernardo Carli Osternack

**Email**: bosternack@hotmail.com

# Instalação
Descompactar o arquivo avaliacao.zip

# Observações
Avaliação do Gerenciamento de Espetáculo

Front end  de um sistema de gerenciamento de espetáculo, desenvolvido em HTML e CSS com pequeno detalhe de jQuery. Esse layout também tem versão responsivo, que se adapta em qualquer resolução de monitor e celular.

Dentro do código foi adicionado "include", um para o cabeçalho e outro do menu.  

O sistema contém 4 paginas: home, cadastro, financeiro e reserva. Onde todas paginas são estáticas.

- Home, existe um carrossel com os espetáculos cadastrados, clicando neles abre a pagina reserva de poltronas;
- Reservas, tem o mapa das poltronas indisponíveis e disponíveis, clicando nas disponíveis, será ativado com a cor verde o local de sua reserva. Ao lado da legenda, teoricamente ja mostraria o valor total das poltronas selecionadas e o valor total das poltronas já reservadas.
- Financeiro, nesta pagina mostra uma tabela com cada espetáculo individual, o número de poltronas disponível, indisponível e o valor total arrecadados com o número de poltronas reservadas.
- Cadastro, a principio é um página estática, pois foi desenvolvido voltado para o front. Nela você poderá cadastrar o espetáculo e deixa-lo ativado ou desativado. Logo abaixa um campo de busca para procurar as peças já cadastradas e por fim uma tabela com todos os espetáculos cadastrados, o status definido ativo ou não e um botão dropdown para editar ou deletar a peça.

Existe alguns botões sem finalidade, so para demonstrar como se fosse um painel administrativo.

A estrutura dos arquivos:
O arquivo header.php contém o doctype onde chama todas as folhas de estilo e jQuery utilizados, junto com umas linhas de código chamando outra folha de estilo para versão mobile. Também tem o header do site.
O menu é um outro arquivo include.
Utilizo o arquivo main.js dentro da pasta JS para usar as funções do carrossel e deixar a poltrona ativada quando clicada.
Na pasta fonts, utilizo para adicionar os ícones mostrados no site.

Esse ai é um pouco do meu estilo de trabalhar como desenvolvedor front end, deixar o mais parecido possível com o layout criado, manter funcional e igual em todos os navegadores e se adaptar em todas resoluções de monitor e celular.