import {Injectable} from '@angular/core';
import {ApiService, AuthHttpService} from '../../api';
import {MenuItem} from '../../../typings/responses/responses';
import {Observable} from "rxjs";
import {Response} from "@angular/http";
import {MenuStore} from "./menu.store";

@Injectable()
export class MenuService extends ApiService {

  constructor(http: AuthHttpService, private menuStore: MenuStore) {
    super(http);
  }

  getMenu(): Observable<MenuItem[]> {
    return this.http.get(this.apiEndpoint + '/api/menu')
      .map((response: Response) => {
        let menu = response.json();
        this.menuStore.setMenu(menu);
        return menu;
      });
  }
}
