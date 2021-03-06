use [coats_wba_p4i]
go

DROP INDEX [IX_coats_sapcc_deliverynotes_customer_id_brand_id_ticket_id_length_id_delivery_date] ON [dbo].[coats_sapcc_deliverynotes]
go

DROP INDEX [missing_index_01] ON [dbo].[coats_sapcc_deliverynotes]
go

DROP INDEX [coats_sapcc_deliverynotes_02] ON [dbo].[coats_sapcc_deliverynotes]
go

DROP INDEX [order_id] ON [dbo].[coats_sapcc_deliverynotes]
go

DROP INDEX [IDX_coats_sapcc_invoice_Invoice_02] ON [dbo].[coats_sapcc_invoices]
go

DROP INDEX [missing_index_02] ON [dbo].[coats_sapcc_invoices]
go

DROP INDEX [IDX_coats_sapcc_invoices_OrdID_02] ON [dbo].[coats_sapcc_invoices]
go

DROP INDEX [IDX_coats_sapcc_invoices_02] ON [dbo].[coats_sapcc_invoices]
go

DROP INDEX [missing_index_01_02] ON [dbo].[coats_sapcc_invoices]
go

DROP INDEX [missing_index_03_02] ON [dbo].[coats_sapcc_invoices]
go

DROP INDEX [IX_coats_sapcc_purchases_customer_id] ON [dbo].[coats_sapcc_purchases]
go

DROP INDEX [missing_index_02_02] ON [dbo].[coats_sapcc_purchases]
go

DROP INDEX [IDX_COATS_SAPCC_PURCHASES_02] ON [dbo].[coats_sapcc_purchases]
go

DROP INDEX [order_id] ON [dbo].[coats_sapcc_purchases]
go

DROP INDEX [sap_order_line_no] ON [dbo].[coats_sapcc_purchases]
go

DROP INDEX [<Name of Missing Index, sysname,>] ON [dbo].[coats_sample_order_line_histories]
go

DROP INDEX [IXNC_coats_sample_order_line_histories_order_line_id_E9B0D] ON [dbo].[coats_sample_order_line_histories]
go

DROP INDEX [IXNC_coats_sample_order_line_histories_order_line_id_00B12] ON [dbo].[coats_sample_order_line_histories]
go

DROP INDEX [IDX_coats_bulk_orders_06_02] ON [dbo].[coats_bulk_orders]
go

DROP INDEX [IXNC_coats_bulk_orders_customer_id_po_number_status_id_created_user_id_F28E1] ON [dbo].[coats_bulk_orders]
go

DROP INDEX [IDX_coats_bulk_order_01_02] ON [dbo].[coats_bulk_orders]
go

DROP INDEX [IDX_coats_bulk_orders_02] ON [dbo].[coats_bulk_orders]
go

DROP INDEX [idx_coats_bulk_orders_Salesorg_02] ON [dbo].[coats_bulk_orders]
go

DROP INDEX [IX_coats_sample_order_lines_order_id_stage_id] ON [dbo].[coats_sample_order_lines]
go

DROP INDEX [idX_coats_sample_order_lines_02] ON [dbo].[coats_sample_order_lines]
go

DROP INDEX [IDX_coats_lrm_logs_delivery_plant_id_is_success_updated_03] ON [dbo].[coats_lrm_logs]
go

DROP INDEX [IX_coats_lrm_logs_order_no] ON [dbo].[coats_lrm_logs]
go

DROP INDEX [line_item_id] ON [dbo].[coats_lrm_logs]
go

DROP INDEX [IDX_coats_bulk_order_lines_produced_quantity_03] ON [dbo].[coats_bulk_order_lines]
go

DROP INDEX [IXNC_coats_bulk_order_lines_order_id_CD74F] ON [dbo].[coats_bulk_order_lines]
go

DROP INDEX [IDX_coats_sap_logs_type_order_id_03] ON [dbo].[coats_sap_logs]
go

DROP INDEX [IDX_coats_sap_logs_02] ON [dbo].[coats_sap_logs]
go

DROP INDEX [idx_coats_sap_logs_01_02] ON [dbo].[coats_sap_logs]
go

DROP INDEX [IDX_coats_shades_shade_card_id_updated_03] ON [dbo].[coats_shades]
go

DROP INDEX [IX_coats_shades_status_id] ON [dbo].[coats_shades]
go

DROP INDEX [IDX_coats_shades_02] ON [dbo].[coats_shades]
go

DROP INDEX [IDX_coats_sample_orders_fce_id_hub_id_sales_org_id_03] ON [dbo].[coats_sample_orders]
go

DROP INDEX [IX_coats_sample_orders_requester_id] ON [dbo].[coats_sample_orders]
go

DROP INDEX [IDX_coats_sample_orders_01_02] ON [dbo].[coats_sample_orders]
go

DROP INDEX [IDX_coats_sample_orders_02] ON [dbo].[coats_sample_orders]
go

DROP INDEX [IDX_Temp_order_id_02] ON [dbo].[Temp_order_id]
go

DROP INDEX [IDX_Temp_order_id_01_02] ON [dbo].[Temp_order_id]
go

DROP INDEX [IDX_coats_sms_logs_user_id_03] ON [dbo].[coats_sms_logs]
go

DROP INDEX [IDX_coats_ship_to_parties_customer_id_03] ON [dbo].[coats_ship_to_parties]
go

DROP INDEX [IX_coats_ship_to_parties_fce_id] ON [dbo].[coats_ship_to_parties]
go

DROP INDEX [IX_coats_ship_to_parties_hub_id] ON [dbo].[coats_ship_to_parties]
go

DROP INDEX [IX_coats_ship_to_parties_ship_to_party_name] ON [dbo].[coats_ship_to_parties]
go

DROP INDEX [IX_coats_fce_tasks_is_completed] ON [dbo].[coats_fce_tasks]
go

DROP INDEX [IdX_coats_bulk_uploads_created_user_id_03] ON [dbo].[coats_bulk_uploads]
go

DROP INDEX [IXNC_coats_aros_model_foreign_key_5BEC7] ON [dbo].[coats_aros]
go

DROP INDEX [IDX_coats_users_O2] ON [dbo].[coats_users]
go

DROP INDEX [IXNC_coats_users_customer_id_8F702] ON [dbo].[coats_users]
go

DROP INDEX [IDX_coats_customers_sales_org_id_access_type_id_03] ON [dbo].[coats_customers]
go

DROP INDEX [IX_coats_customers_sales_org_id] ON [dbo].[coats_customers]
go

DROP INDEX [IX_coats_customers_customer_name_id] ON [dbo].[coats_customers]
go

DROP INDEX [IX_coats_sales_org_materials_plant_id_updated] ON [dbo].[coats_sales_org_materials]
go

DROP INDEX [IDX_coats_sales_org_materials_sales_org_id_brand_id_ticket_id_length_id_finish_id_bulk_sample_id_03] ON [dbo].[coats_sales_org_materials]
go

DROP INDEX [IDX_coats_sales_org_materials_02] ON [dbo].[coats_sales_org_materials]
go

DROP INDEX [IX_coats_our_stocks_sales_org_id_plant_id_brand_id_ticket_id_shade_id_mum_type_id] ON [dbo].[coats_our_stocks]
go

DROP INDEX [IX_coats_users_countries_country_id] ON [dbo].[coats_users_countries]
go

DROP INDEX [IX_coats_in_process_files_customer_id_file_name_is_inprocess_sales_org_id] ON [dbo].[coats_in_process_files]
go

DROP INDEX [IX_coats_in_process_files_file_name_is_inprocess_uploaded_by] ON [dbo].[coats_in_process_files]
go

DROP INDEX [IDX_coats_supply_plants_brand_id_ticket_id_03] ON [dbo].[coats_supply_plants]
go

DROP INDEX [IX_coats_quantity_factors_sales_org_id] ON [dbo].[coats_quantity_factors]
go

DROP INDEX [IX_coats_error_logs_customer_id_sales_org_id] ON [dbo].[coats_error_logs]
go

DROP INDEX [IX_coats_error_logs_uploaded_by] ON [dbo].[coats_error_logs]
go

DROP INDEX [IDX_coats_business_principals_business_principal_name_03] ON [dbo].[coats_business_principals]
go

DROP INDEX [idx_coats_shade_cards_plants_brands_02] ON [dbo].[coats_shade_cards_plants_brands]
go

DROP INDEX [IXNC_coats_bulk_import_mappings_user_id_13832] ON [dbo].[coats_bulk_import_mappings]
go

DROP INDEX [customer_id] ON [dbo].[coats_charged_products]
go

DROP INDEX [ship_to_party_id] ON [dbo].[coats_cabinets]
go

DROP INDEX [sales_org_id] ON [dbo].[coats_enterprise_structures]
go

DROP INDEX [requester_id] ON [dbo].[coats_archives]
go

DROP INDEX [sales_org_id] ON [dbo].[coats_sales_org_materials_live]
go

DROP INDEX [country_id] ON [dbo].[coats_sales_org_materials_live]
go

DROP INDEX [brand_id] ON [dbo].[coats_sales_org_materials_live]
go

DROP INDEX [ticket_id] ON [dbo].[coats_sales_org_materials_live]
go

DROP INDEX [plant_id] ON [dbo].[coats_sales_org_materials_live]
go

