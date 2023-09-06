<h3>fornecedor ok</h3>

@php
/*
   if() {

   } elseif() {

   } else {

   }
*/
@endphp

@if(count($fornecedores)> 0 && count($fornecedores) < 10)
    <h3>os fornecedores estão online</h3>
@elseif(count($fornecedores)> 10)
    <h3>cadastrados os fornecedores</h3>
@else
    <h3>cadastra-se fornecedor</h3>
@endif