/**
 * Representa una tarea pendiente.
 * @class
 */
class Tarea {
    /**
     * Crea una nueva tarea
     * @param {number} id - Identificador de la tarea
     * @param {string} title - Título de la tarea
     * @param {boolean} completed - Estado de la tarea
     */
    constructor(id, title, completed = false) {
        this.id = id;
        this.title = title;
        this.completed = completed;
    }

    /**
     * Marca la tarea como completada.
     * @returns {void}
     */
    markCompleted() {
        this.completed = true;
    }

    /**
     * Devuelve una representación de la tarea.
     * @returns {{id:number, title:string, completed:boolean}}
     */
    toJSON() {
        return {
            id: this.id,
            title: this.title,
            completed: this.completed
        };
    }
}
