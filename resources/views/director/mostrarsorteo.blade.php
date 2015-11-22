
@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">

        <form class="form-inline" action="{{route('sortear')}}" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="numero" class="control-label">Sortear Grupos de: </label>
                    <input type="text" class="form-control" id="numero" name="numero">
                    <select class="form-control" placeholder="Gestion Academica" name="materia_id" id="materia_id">
                        <option selected>Eliga una materia</option>
                        <option value="1" >Dimensión Ciencia y Tecnología</option>
                        <option value="2">Investigación Científica</option>
                        <option value="3">Dimensión Militar</option>
                        <option value="4">Prospectiva</option>
                        <option value="5">Historia Crítica de Bolivia</option>
                        <option value="6">Inteligencia Estratégica</option>
                        <option value="7">Defensa Legal del Estado</option>
                        <option value="8">Construcción y Consolidación del Estado Plurinacional</option>
                        <option value="9">Gestón Constructiva del Conflicto sin Daño</option>
                        <option value="10">Teoría del Estado</option>
                        <option value="11">Teoría del Estado</option>
                        <option value="12">Relaciones Internacionales</option>
                        <option value="13">Planificación Estratégica</option>
                        <option value="14">Dimensión Económica</option>
                        <option value="15">Dimensión Cultural</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-lg">Sortear</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection