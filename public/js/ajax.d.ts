/***
 *
 * @param mac 方法?参数1&参数2 参数可以用%代替
 * @param fun 返回后调用的方法
 * @param par 用%代替的参数
 */
declare function ajaxPost(mac:string,fun:(ret:any)=>{},errorfun:()=>{},...par):void;
/***
 *
 * @param mac 方法?参数1&参数2 参数可以用%代替
 * @param fun 返回后调用的方法
 * @param par 用%代替的参数
 */
declare function ajaxGet(mac:string,fun:(ret:any)=>{},errorfun:()=>{},...par):void;
/***
 *
 * @param mac 方法?参数1&参数2 参数可以用%代替
 * @param par 用%代替的参数
 * @return 返回服务器的返回值
 */
declare function ajaxPostAsync(mac:string,...par):Promise<any>;
declare function ajaxGetAsync(mac:string,...par):Promise<any>;