import http from "../http-common";


class ContactosDataService {
    getAll() {
      return http.get("/contactos");
    }

    search(valor)
    {
      return http.get("/search/"+valor);
    }
  }
  
  export default new ContactosDataService();