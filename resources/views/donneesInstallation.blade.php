@extends('layouts.app')
@section('content')

    <h1>Données installation</h1>
    <form action="/insertDonnees" method="post">
        <table>
            <tr>
                <td> Nombre de panneaux : </td>
                <td><input type="text" name="nombrePanneaux"></td>
            </tr>
            <tr>
                <td> Surface : </td>
                <td><input type="text" name="surface"></td>
            </tr>
            <tr>
                <td> Latitude : </td>
                <td><input type="text" name="latitude"></td>
            </tr>
            <tr>
                <td> Longitude : </td>
                <td><input type="text" name="longitude"></td>
            </tr>
            <tr>
                <td> Coût Installation : </td>
                <td><input type="text" name="cout"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Valider"></td>
            </tr>
        </table>
    </form>

    {!! Form::close() !!}
@endsection
