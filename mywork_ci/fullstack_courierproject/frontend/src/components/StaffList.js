/* eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from 'react';
import axios from "axios";
// import { Link } from "react-router-dom";
 
const StaffList = () => {
    const [staffs, setStaffs] = useState([]);
 
    useEffect(() => {
        getStaffs();
    },[]);
 
    const getStaffs = async () => {
        const staffs = await axios.get('http://localhost:8080/frontend/staffs');
        setStaffs(staffs.data);
    }
 
    // const deleteProduct = async (id) =>{
    //     await axios.delete(`http://localhost:8080/products/${id}`);
    //     getProducts();
    // }
 console.log(staffs);
    return (
        <div>
            {/* <Link to="/add" className="button is-primary mt-5">Add New</Link> */}
            <table className="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Staff Name</th>
                        <th>Staff Email</th>
                        <th>Staff Phone</th>
                        <th>Staff Image</th>
                        <th>Branch Name</th>
                        {/* <th>Actions</th> */}
                    </tr>
                </thead>
                <tbody>
                    { staffs.map((staff, index) => (
                        <tr key={staff.id}>
                            <td>{index + 1}</td>
                            <td>{staff.staff_name}</td>
                            <td>{staff.staff_email}</td>
                            <td>{staff.staff_phone}</td>
                            <td>
                                {/* {staff.staff_image} */}
                                <img src={`http://localhost:8080/${staff.staff_image}`} width={"90px"} height={"70px"} />
                            </td>
                            <td>{staff.branch_id}</td>
                            {/* <td> */}
                                {/* <Link to={`/edit/${product.id}`} className="button is-small is-info">Edit</Link> */}
                                {/* <button onClick={() => deleteProduct(product.id)} className="button is-small is-danger">Delete</button> */}
                            {/* </td> */}
                        </tr>
                    )) }
                     
                </tbody>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Staff Name</th>
                        <th>Staff Email</th>
                        <th>Staff Phone</th>
                        <th>Staff Image</th>
                        <th>Branch Name</th>
                        {/* <th>Actions</th> */}
                    </tr>
                </thead>
            </table>
        </div>
    )
}
 
export default StaffList;