import axios from "axios";

const API_URL = "http://localhost:8000/api/siswa";

export const getSiswa = () => axios.get(API_URL);
export const addSiswa = () => axios.post(API_URL,data);
export const updateSiswa = () => axios.put(`${API_URL}/$id`,data);
export const deleteSiswa = () => axios.delete(`${API_URL}/$id`);
