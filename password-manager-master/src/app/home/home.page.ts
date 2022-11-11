import { Component } from '@angular/core';
import { Credencial } from '../crendecial';
import { LocalStorageService } from '../local-storage.service';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  public _credencial = {} as Credencial;
  constructor(
    public local_storage:LocalStorageService
  ) {
    this.carregar();
  }
  carregar(){
    //this.site   = this.local_storage.get('site');
    //this.login  = this.local_storage.get('login');
    //this.senha  = this.local_storage.get('senha');
  }
  armazenar(){
    this.local_storage.append('credenciais',this._credencial);
  }
  limpar(){
    // Serviço que limpa os dados do local storage
    this.local_storage.clear();
  }
}
