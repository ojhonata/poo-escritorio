# poo-escritorio
<h1>Projeto de gerenciamento de escritório usando Programação Orientada a Objetos em PHP para trabalho acadêmico</h1>

index.php: Script principal para testar o sistema. Ele cria instâncias de Escritorio, Armario, Gaveta, e dos itens (Documento, Objeto, e Pasta). Também realiza operações de adição, remoção e uma auditoria completa do escritório, exibindo todos os itens armazenados.

Escritorio.php: Define a classe Escritorio, que representa o ambiente com múltiplos armários. Possui métodos para adicionar, remover e listar armários, além do método auditoria(), que exibe o conteúdo completo dos armários, gavetas e itens.

Armario.php: Define a classe Armario, que contém várias gavetas. Inclui métodos para adicionar, remover e listar gavetas, com suporte para exibir todos os itens de cada gaveta.

Gaveta.php: Define a classe Gaveta, que representa uma gaveta que armazena itens. Inclui métodos para adicionar, remover e listar itens específicos.

Item.php: Classe base para todos os itens que podem ser armazenados no escritório. Contém propriedades comuns, como nome e descrição, além de métodos para acessar e modificar essas propriedades.

Documento.php: Classe que estende Item e representa documentos específicos. Inclui propriedades adicionais, como dataCriacao, que registra a data de criação do documento.

Objeto.php: Outra classe que estende Item, usada para objetos físicos. Inclui uma propriedade extra pesoObjeto, para especificar o peso do objeto.

Pasta.php: Também estende Item, representando uma pasta de documentos. Possui uma propriedade adicional categoriaPasta, que indica a categoria da pasta.
