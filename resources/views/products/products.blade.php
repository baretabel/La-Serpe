@extends('layout/layout')
@section('content')

<div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Produit</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Categorie</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                
                         
                          <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->nom }}</td>
                            <td>{{ $product->prix_ventre }}</td>
                            <td>{{ $product->famille->nom }}</td>
                            <td> <a href="/produit/{{ $product->id }}" class="btn btn-primary">Détails</a><td>
                                <td> <a href="/produits/{{ $product->id }}" class="btn btn-primary">supprimer</a><td>
                              <td> <a href="/form/{{ $product->id }}" class="btn btn-primary">modifier</a><td>
                          </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Go</a>
                </div>
              </div>
              @include('nav/nav')
</body>
</html>