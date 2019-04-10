 new Vue({
    el: '#task-div',
    data:{
        newTask: '',
        text: 'Welcome to Vue.js - V-for',
        tasks: [
                'eat',
                'sleep',
                'repeat'
            ]
    },
    methods: {
        addTask(){
        this.tasks.push(this.newTask);
 },
        removeTask(){
            this.tasks.pop(this.newTask);

            }
        }
})
// console.log(taskList);
