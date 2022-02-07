import { Controller } from '@hotwired/stimulus';
import axios from 'axios';

export default class extends Controller {
    static targets = [ 'table' ];

    connect() {
        this.load();
    }

    actualize() {
        this.load();
    }

    load() {
        this.getSensorList().then((response) => {
            let list = '';
            response.data.forEach((sensor) => {
                list += '<tr><td>'+sensor.id+'</td>'+
                    '<td>'+sensor.name+'</td>'+
                    '<td>'+sensor.value+'</td>'+
                    '<td>'+sensor.sensorTypeName+'</td></tr>';
            });

            this.tableTarget.innerHTML = list;
        });
    }

    getSensorList() {
        return axios.get('/api/sensor');
    }
}