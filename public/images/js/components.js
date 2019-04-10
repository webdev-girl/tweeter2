Vue.component('task-list', {
template: `
    <ul class="task bold btn btn-primary">
         <task v-for="task in tasks">{{ task }}</task>
    </ul>
`,
data(){
    return {
        tasks: [
            'Make bed',
            'Shower',
            'Feed cats',
             'Nap'
            ]
        }
    }

});


new Vue({
    el:'#demo-1',

});
