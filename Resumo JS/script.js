function chamar()
{
    texto = nome.value
    teste.innerHTML = texto
}

clique = 0
function janela()
{ 
    clique = clique+1
    if (clique == 1)
    {   
        janelaa.style.display = "block"
        
    }
    if (clique == 2)
    {   
        janelaa.style.display = "none"
        clique = 0
    }
}

function fechar()
{
    janelaa.style.display = "none" 
}

value = 0
function somar()
{
    value = value+1
    resultado.value = value
}

function imprimir()
{
    window.print(); 
}