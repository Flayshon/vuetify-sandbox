<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <v-app>
                <v-card width="400" class="mx-auto mt-5">
                    <v-card-title>
                        <h1 class="display-1">Sign In</h1>
                    </v-card-title>
                    <v-card-text>
                        <v-form>
                            <v-text-field
                                label="Username"
                                prepend-icon="mdi-account-circle">
                            </v-text-field>
                            <v-text-field
                                label="Password"
                                type="password"
                                prepend-icon="mdi-lock"
                                append-icon="mdi-eye-off">
                            </v-text-field>
                        </v-form>
                    </v-card-text>
                    <v-divider></v-divider>
                    <v-card-actions>
                        <v-btn color="success">Register</v-btn>
                        <v-spacer></v-spacer>
                        <v-btn color="indo">Login</v-btn>
                    </v-card-actions>
                </v-card>
            </v-app>
        </div>
    </body>
</html>
