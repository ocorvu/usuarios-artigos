@extends('templates')

@section('pageTitle')
    Users
@endsection
@section('title')
    Users
@endsection

@section('content')
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ substr($user->password, 0, 6) }}</td>
                    <td>
                        <form action="" method="GET">
                            <button 
                                id="detalhes"
                                title="Detalhes" 
                                type="submit" 
                                formaction="{{ route('users.show', $user->id) }}"
                            >
                            <button 
                                id="modificar"
                                title="Modificar" 
                                type="submit" 
                                formaction="{{ route('users.show', $user->id) }}"
                            >
                            <button 
                                id="excluir"
                                title="Excluir" 
                                type="submit" 
                                formaction="{{ route('users.show', $user->id) }}"
                            >
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>        
    </table>
@endsection