<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Vue JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
    <title>Test API</title>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

    <div id="app">
        <ol>
            <li v-for="el in students">
                @{{ el.first_name }}
                @{{ el.last_name}},
                @{{ el.birth }}
            </li>
        </ol>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                students: []
            },
            beforeMount() {
                const self = this;
                axios.get('http://127.0.0.1:8000/api/students')
                    .then(resp => self.students = resp.data);
            }
        });
    </script>
</body>
</html>
