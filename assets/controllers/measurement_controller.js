import { Controller } from '@hotwired/stimulus';
import axios from 'axios';

export default class extends Controller {
    connect() {
        this.load();
    }

    load() {
        this.getMeasuramentList().then((response) => {
            let list = '';
            response.data.forEach((measurement) => {
                list += '<tr><td>'+measurement.id+'</td>'+
                    '<td>'+measurement.year+'</td>'+
                    '<td>'+measurement.type+'</td>'+
                    '<td>'+measurement.color+'</td>'+
                    '<td>'+measurement.variety+'</td>'+
                    '<td>'+measurement.temperature+'</td>'+
                    '<td>'+measurement.graduation+'</td>'+
                    '<td>'+measurement.ph+'</td>'+
                    '<td>'+measurement.observations+'</td>'+
                    '<td>'+measurement.wine+'</td></tr>';
            });

            this.element.innerHTML = list;
        });
    }

    getMeasuramentList() {
        return axios.get('/api/measurement');
    }
}