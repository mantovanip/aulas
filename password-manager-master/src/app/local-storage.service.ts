import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class LocalStorageService {
  public local_storage:any = window.localStorage;
  constructor() { }

  set(key:string,value:any){
    this.local_storage.setItem(key,JSON.stringify(value));
  }

  get(key:string){
    return this.local_storage.getItem(key);
  }

  del(key:string){
    this.set(key,'');
  }

  clear(){
    this.local_storage.clear();
  }

  rm(key:string){
    this.local_storage.removeItem(key)
  }

  append(key:string,value:any){
    // Retorna o valor que está no localStorage
    let old_value = this.get(key) ;
    let new_value:Array<any>;
    if (old_value == null){
      new_value = [];
    }else{
      // Transforma o valor de String para JSON
      new_value  = JSON.parse(old_value);
    }

    // Adicionar o novo valor no vetor
    new_value.push(value);

    // Salva a nova informação no localStorage
    this.set(key,new_value);
  }
}